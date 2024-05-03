<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\MobileReview;
use Illuminate\Http\Request;

class MobileReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = MobileReview::get();
        return view('management/mobile_review/index', compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/mobile_review/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileReview  $mobileReview
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MobileReview::where('id', $id)->get()->first();
        return view('management/mobile_review/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileReview  $mobileReview
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileReview $mobileReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MobileReview  $mobileReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileReview $mobileReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileReview  $mobileReview
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = MobileReview::find($id);
        $review->update([
            'deleted_by' => auth()->user()->id,
        ]);
        MobileReview::find($id)->delete();
        return redirect()->route('reviews.index')->with('success','Mobile Review deleted successfully');
    }
}
