<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\MobileStatus;
use Illuminate\Http\Request;

class MobileStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = MobileStatus::get();
        return view('management/mobile_status/index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/mobile_status/create');
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
        $status               =   new MobileStatus;
        $status->name         =   $request->name;
        $status->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $status->description  =   $request->description;
        $status->created_by  =    auth()->user()->id;
        $status->save();
        return redirect()->route('mobile-status.index')->with('success', "Mobile Status Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileStatus  $mobileStatus
     * @return \Illuminate\Http\Response
     */
    public function show(MobileStatus $mobileStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileStatus  $mobileStatus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status = MobileStatus::find($id);
        return view('management/mobile_status/edit',compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MobileStatus  $mobileStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $status = MobileStatus::find($id);
        $status->name         =   $request->name;
        $status->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $status->description  =   $request->description;
        $status->updated_by   =    auth()->user()->id;
        $status->save();
        return redirect()->route('mobile-status.index')->with('success', "Mobile Status Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileStatus  $mobileStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = MobileStatus::find($id);
        $status->update([
            'deleted_by' => auth()->user()->id,
        ]);
        MobileStatus::find($id)->delete();
        return redirect()->route('mobile-status.index')->with('success','Mobile Status deleted successfully');
    }
}
