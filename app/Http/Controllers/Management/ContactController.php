<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::latest()->get()->all();
        return view('management/contact/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contact::where('id', $id)->get()->first();
        return view('management/contact/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Contact::find($id);
        $country->update([
            'deleted_by' => auth()->user()->id,
        ]);
        Contact::find($id)->delete();
        return redirect()->back()->with('success', 'Contact Deleted Successfully');
    }
}
