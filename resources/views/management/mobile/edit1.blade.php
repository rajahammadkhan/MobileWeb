public function update(Request $request,$id)
{
    $request->validate([
        "name" => "required",
    ]);
    $mobile                = Mobile::find($id);
    $mobile->u_id         =   auth()->user()->id;
    $mobile->name         =   $request->name;
    $mobile->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
    $mobile->price_pkr              =   $request->price_pkr;
    $mobile->price_usd          =   $request->price_usd;
    $mobile->brand_id          =   $request->brand_id;
    $mobile->category_id          =   $request->category_id;
    $mobile->status_id          =   $request->status_id;
    $mobile->operating_system_id          =   $request->operating_system_id;
    $mobile->short_description         =   $request->short_description;
    $mobile->long_description  =   $request->long_description;
    $mobile->updated_by  =    auth()->user()->id;
    $mobile->save();

    $media = $mobile->media;
    if($media == null)
    {
        $media = new Media;
        $media->u_id = Auth::user()->id;
        $media->created_by  = Auth::user()->id;
        $mobilemedia = new MobileMedia;
        $mobilemedia->created_by  = Auth::user()->id;
    }
    else
    {
        $media->updated_by  = Auth::user()->id;
        $mobilemedia = $media->mobileMedia;
        $mobilemedia->updated_by  = Auth::user()->id;
    } 

    if ($request->hasFile('mobile_image')) {
        $mobileImage = $request->file('mobile_image');
        $image_url = date('mdYHis') . uniqid() . $mobileImage->getClientOriginalName();
        $mobileImage->move(public_path('media/mobile'), $image_url);

        $media->unique_name = $image_url;
        $media->save();

        $mobilemedia->mobile_id  = $mobile->id;
        $mobilemedia->media_id   = $media->id;
        $mobilemedia->is_feature = 1;
        $mobilemedia->save();
    }

    if ($request->hasFile('filepond')) {
        $filepondFiles = $request->file('filepond');
    
        foreach ($filepondFiles as $filepondFile) {
            $image_url = date('mdYHis') . uniqid() . $filepondFile->getClientOriginalName();
            $filepondFile->move(public_path('media/mobile'), $image_url);
    
            // Save media information
            $newMedia = new Media;
            $newMedia->u_id = Auth::user()->id;
            $newMedia->created_by = Auth::user()->id;
            $newMedia->unique_name = $image_url;
            $newMedia->save();
    
            // Save mobile media information
            $newMobileMedia = new MobileMedia;
            $newMobileMedia->mobile_id = $mobile->id;
            $newMobileMedia->media_id = $newMedia->id;
            $newMobileMedia->save();
        }
    }

    return redirect()->route('mobiles.index')->with('success', "Mobile Updated Successfully");
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
    ]);
    try {
        $user_id = auth()->user()->id;
        $mobile = Mobile::find($id);
        $mobile->update([
            'u_id' => $user_id,
            'name' => $request->name,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name))),
            'price_pkr' => $request->price_pkr,
            'price_usd' => $request->price_usd,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'status_id' => $request->status_id,
            'operating_system_id' => $request->operating_system_id,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'updated_by' => $user_id,
        ]);

        
        $media = $mobile->media()->firstOrNew([
            'u_id' => $user_id,
        ]);
        $media->updated_by = $user_id;
        $media->save();

        $mobileMedia = $media->mobileMedia()->firstOrNew([
            'created_by' => $user_id,
        ]);
        $mobileMedia->updated_by = $user_id;
        $mobileMedia->is_feature = 1;
        $mobileMedia->save();

        if ($request->hasFile('mobile_image')) {
            $image_url = $this->uploadFile($request->file('mobile_image'), 'media/mobile');
            $media->update(['unique_name' => $image_url]);
            $mobileMedia->update(['media_id' => $media->id]);
        }

        if ($request->hasFile('filepond')) {
            foreach ($request->file('filepond') as $filepondFile) {
                $image_url = $this->uploadFile($filepondFile, 'media/mobile');
                $newMedia = Media::create([
                    'u_id' => $user_id,
                    'created_by' => $user_id,
                    'unique_name' => $image_url,
                ]);

                MobileMedia::create([
                    'mobile_id' => $mobile->id,
                    'media_id' => $newMedia->id,
                ]);
            }
        }
        return redirect()->route('mobiles.index')->with('success', 'Mobile Updated Successfully');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to update mobile.');
    }
}

private function uploadFile($file, $destination)
{
    $image_url = date('mdYHis') . uniqid() . $file->getClientOriginalName();
    $file->move(public_path($destination), $image_url);
    return $image_url;
}