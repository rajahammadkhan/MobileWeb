<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\MobileCategory;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MobileCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = MobileCategory::get();
        return view('management/mobile_category/index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/mobile_category/create');
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
        $category = MobileCategory::create([
            'name' => $request->name,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name))),
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);
        $media = new Media([
            'u_id' => Auth::user()->id,
            'title' => 'category',
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);
        if ($request->hasFile('category_image')) {
            $categoryImage = $request->file('category_image');
            $image_url = date('mdYHis') . uniqid() . $categoryImage->getClientOriginalName();
            $categoryImage->move(public_path('media/category'), $image_url);
            $media->unique_name = $image_url;
        }
        $media->save();
        $category->media()->associate($media);
        $category->save();
        return redirect()->route('mobile-category.index')->with('success', "Mobile Category Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileCategory  $mobileCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MobileCategory $mobileCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileCategory  $mobileCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = MobileCategory::findOrFail($id);
        return view('management/mobile_category/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MobileCategory  $mobileCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $request->validate([
            'name' => 'required',
        ]);
        $category = MobileCategory::find($id);
        $media = $category->media;
        if($media == null)
        {
            $media = new Media;
            $media->title = 'category';
            $media->u_id = Auth::user()->id;
            $media->created_by  = Auth::user()->id;
        }
        else
        {
            $media->updated_by  = Auth::user()->id;
        } 
        if ($request->hasFile('category_image')) {
            $categoryImage = $request->file('category_image');
            $image_url = date('mdYHis') . uniqid() . $categoryImage->getClientOriginalName();
            $categoryImage->move(public_path('media/category'), $image_url);
            $media->unique_name = $image_url;
            $media->save();
            $category->media()->associate($media);
        }
        $category->name = $request->name;
        $category->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $category->description = $request->description;
        $category->updated_by  = Auth::user()->id;
        $category->save();


        return redirect()->route('mobile-category.index')->with('success', "Mobile Category Updated Successfully");

        $request->validate([
            'name' => 'required',
        ]);
        $category = MobileCategory::find($id);
        $category->name         =   $request->name;
        $category->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $category->description  =   $request->description;
        $category->updated_by   =    auth()->user()->id;
        $category->save();
        return redirect()->route('mobile-category.index')->with('success', "Mobile Category Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileCategory  $mobileCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = MobileCategory::findOrFail($id);
        $category->update([
            'deleted_by' => auth()->user()->id,
        ]);
        $media = $category->media;
        if ($media) {
            $mediaPath = public_path('media/category/' . $media->unique_name);
            if (file_exists($mediaPath)) {
                unlink($mediaPath);
            }
            $media->delete();
        }
        MobileCategory::find($id)->delete();
        return redirect()->route('mobile-category.index')->with('success','Mobile Category deleted successfully');
        
        


    }
}
