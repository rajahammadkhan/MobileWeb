<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\MobileBrand;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MobileBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = MobileBrand::get();
        return view('management/mobile_brand/index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/mobile_brand/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
        ]);
        $brand = MobileBrand::create([
            'name' => $request->name,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name))),
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);
        $media = new Media([
            'u_id' => Auth::user()->id,
            'title' => 'brand',
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);
        if ($request->hasFile('brand_image')) {
            $brandImage = $request->file('brand_image');
            $image_url = date('mdYHis') . uniqid() . $brandImage->getClientOriginalName();
            $brandImage->move(public_path('media/brand'), $image_url);
            $media->unique_name = $image_url;
        }
        $media->save();
        $brand->media()->associate($media);
        $brand->save();
        return redirect()->route('mobile-brand.index')->with('success', "Mobile Brand Added Successfully");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileBrand  $mobileBrand
     * @return \Illuminate\Http\Response
     */
    public function show(MobileBrand $mobileBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileBrand  $mobileBrand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = MobileBrand::findOrFail($id);
        return view('management/mobile_brand/edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MobileBrand  $mobileBrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $brand = MobileBrand::findOrFail($id);
        $media = $brand->media;
        if($media == null)
        {
            $media = new Media;
            $media->u_id = Auth::user()->id;
            $media->created_by  = Auth::user()->id;
        }
        else
        {
            $media->updated_by  = Auth::user()->id;
        } 
        $brand->name = $request->name;
        $brand->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $brand->description = $request->description;
        $brand->updated_by  = Auth::user()->id;
        $brand->save();

        if ($request->hasFile('brand_image')) {
            $brandImage = $request->file('brand_image');
            $image_url = date('mdYHis') . uniqid() . $brandImage->getClientOriginalName();
            $brandImage->move(public_path('media/brand'), $image_url);
            $media->unique_name = $image_url;
            $media->save();
        }
        return redirect()->route('mobile-brand.index')->with('success', "Mobile Brand Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileBrand  $mobileBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = MobileBrand::findOrFail($id);
        $brand->update([
            'deleted_by' => auth()->user()->id,
        ]);
        $media = $brand->media;
        if ($media) {
            $mediaPath = public_path('media/brand/' . $media->unique_name);
            if (file_exists($mediaPath)) {
                unlink($mediaPath);
            }
            $media->delete();
        }
        MobileBrand::find($id)->delete();


        return redirect()->route('mobile-brand.index')->with('success','Mobile Brand deleted successfully');
    }
}
