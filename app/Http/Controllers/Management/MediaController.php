<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::get();
        return view('management/media/index', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('management/media/create');
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
            "title" => "required",
        ]);
        $media               =   new Media;
        $media->u_id         =   auth()->user()->id;
        $media->unique_name         =   $request->unique_name;
        $media->link              =   $request->link;
        $media->base_url          =   $request->base_url;
        $media->extension         =   $request->extension;
        $media->size         =   $request->size;
        $media->alt_tag         =   $request->alt_tag;
        $media->title         =   $request->title;
        $media->batch_no         =   $request->batch_no;
        $media->description  =   $request->description;
        $media->created_by  =    auth()->user()->id;
        $media->save();
        return redirect()->route('media.index')->with('success', "Media Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);
        return view('management/media/edit',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $media               =   Media::find($id);
        $media->u_id         =   auth()->user()->id;
        $media->unique_name         =   $request->unique_name;
        $media->link              =   $request->link;
        $media->base_url          =   $request->base_url;
        $media->extension         =   $request->extension;
        $media->size         =   $request->size;
        $media->alt_tag         =   $request->alt_tag;
        $media->title         =   $request->title;
        $media->batch_no         =   $request->batch_no;
        $media->description  =   $request->description;
        $media->updated_by   =    auth()->user()->id;
        $media->save();
        return redirect()->route('media.index')->with('success', "Media Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::find($id);
        $media->update([
            'deleted_by' => auth()->user()->id,
        ]);
        Media::find($id)->delete();
        return redirect()->route('media.index')->with('success','Media deleted successfully');
    }
}
