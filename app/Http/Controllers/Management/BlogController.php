<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('management/blog/index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management/blog/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
        ]);
        $blog = Blog::create([
            'name' => $request->name,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name))),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'created_by' => Auth::user()->id,
        ]);
        $media = new Media([
            'u_id' => Auth::user()->id,
            'title' => 'blog',
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);
        if ($request->hasFile('blog_image')) {
            $blogImage = $request->file('blog_image');
            $image_url = date('mdYHis') . uniqid() . $blogImage->getClientOriginalName();
            $blogImage->move(public_path('media/blog'), $image_url);
            $media->unique_name = $image_url;
        }
        $media->save();
        $blog->media()->associate($media);
        $blog->save();
        return redirect()->route('blogs.index')->with('success', "Mobile Blog Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::where('id', $id)->get()->first();
        return view('management.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $blog = Blog::findOrFail($id);
        $media = $blog->media;
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
        $blog->name = $request->name;
        $blog->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->status = $request->status;
        $blog->status = $request->status;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->updated_by  = Auth::user()->id;
        $blog->save();

        if ($request->hasFile('blog_image')) {
            $blogImage = $request->file('blog_image');
            $image_url = date('mdYHis') . uniqid() . $blogImage->getClientOriginalName();
            $blogImage->move(public_path('media/blog'), $image_url);
            $media->unique_name = $image_url;
            $media->save();
        }
        return redirect()->route('blogs.index')->with('success', "Blog Updated Successfully");

        BlogPageCategory::where('category_id',$id)->delete();
        $blog = blog::where('id', $id)->get()->first();
        $blog->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'admin_status' => $request->admin_status,
            'type'=>$request->type??null,
            'category'=>$request->category??null,
            'written_by'=>$request->written_by
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update([
            'deleted_by' => auth()->user()->id,
        ]);
        $media = $blog->media;
        if ($media) {
            $mediaPath = public_path('media/blog/' . $media->unique_name);
            if (file_exists($mediaPath)) {
                unlink($mediaPath);
            }
            $media->delete();
        }
        Blog::find($id)->delete();
        return redirect()->route('blogs.index')->with('success','Blog deleted successfully');
    }
}
