<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Mobile;
use App\Models\Media;
use App\Models\MobileMedia;
use App\Models\MobileBrand;
use App\Models\MobileCategory;
use App\Models\MobileStatus;
use App\Models\MobileOperatingSystem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\MobileCollection;
class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobile = Mobile::get();
        return view('management/mobile/index', compact('mobile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('management/mobile/create');
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
        $mobile               =   new Mobile;
        $mobile->u_id         =   auth()->user()->id;
        $mobile->name         =   $request->name;
        $mobile->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mobile->price_pkr              =   $request->price_pkr;
        $mobile->price_usd          =   $request->price_usd;
        $mobile->short_description         =   $request->short_description;
        $mobile->long_description  =   $request->long_description;
        $mobile->created_by  =    auth()->user()->id;
        $mobile->save();
        return redirect()->route('mobiles.edit',$mobile->id)->with('success', "Mobile Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function show(Mobile $mobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobiledata = Mobile::find($id);
        $mobile_brand = MobileBrand::get();
        $mobile_category = MobileCategory::get();
        $mobile_status = MobileStatus::get();
        $operating_system = MobileOperatingSystem::get();
        $mobile = new MobileCollection($mobiledata);  
        return view('management/mobile/edit',compact('mobile','mobile_brand','mobile_category','mobile_status','operating_system'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    

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
             $mobilemedia = MobileMedia::where('media_id',$media->id)->get()->first();
             $mobilemedia->updated_by  = Auth::user()->id;
         } 
     
         if ($request->hasFile('mobile_image')) {
             $mobileImage = $request->file('mobile_image');
             $image_url = date('mdYHis') . uniqid() . $mobileImage->getClientOriginalName();
             $mobileImage->move(public_path('media/mobile'), $image_url);
     
             $media->unique_name = $image_url;
             $media->title = 'mobile';
             $media->save();
     
             $mobilemedia->mobile_id  = $mobile->id;
             $mobilemedia->media_id   = $media->id;
             $mobilemedia->is_feature = 1;
             $mobilemedia->save();
         }
     
         if ($request->hasFile('images')) {
             $filepondFiles = $request->file('images');
         
             foreach ($filepondFiles as $filepondFile) {
                 $image_url = date('mdYHis') . uniqid() . $filepondFile->getClientOriginalName();
                 $filepondFile->move(public_path('media/mobile'), $image_url);
         
                 // Save media information
                 $newMedia = new Media;
                 $newMedia->u_id = Auth::user()->id;
                 $newMedia->created_by = Auth::user()->id;
                 $newMedia->unique_name = $image_url;
                 $newMedia->title = 'mobile';
                 $newMedia->save();
         
                 // Save mobile media information
                 $newMobileMedia = new MobileMedia;
                 $newMobileMedia->mobile_id = $mobile->id;
                 $newMobileMedia->media_id = $newMedia->id;
                 $newMobileMedia->created_by = Auth::user()->id;
                 $newMobileMedia->save();
             }
         }
     
         return redirect()->route('mobiles.index')->with('success', "Mobile Updated Successfully");
     }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobile = Mobile::find($id);
        $mobile->update([
            'deleted_by' => auth()->user()->id,
        ]);
        Mobile::find($id)->delete();
        return redirect()->route('mobiles.index')->with('success','Mobile deleted successfully');
    }

    public function imageDelete(Request $request)
    {
        $media = Media::where('id', $request->id)->get()->first();
        $media->update([
            'deleted_by' => auth()->user()->id,
        ]);
        Media::where('id', $request->id)->delete();
        return true;
    }
}
