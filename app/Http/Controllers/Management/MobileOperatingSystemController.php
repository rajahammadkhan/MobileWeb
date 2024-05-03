<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\MobileOperatingSystem;
use Illuminate\Http\Request;

class MobileOperatingSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operating = MobileOperatingSystem::get();
        return view('management/mobile_operating_system/index', compact('operating'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/mobile_operating_system/create');
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
        $operating               =   new MobileOperatingSystem;
        $operating->name         =   $request->name;
        $operating->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $operating->description  =   $request->description;
        $operating->created_by  =    auth()->user()->id;
        $operating->save();
        return redirect()->route('mobile-operating-system.index')->with('success', "Mobile Operating System Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileOperatingSystem  $mobileOperatingSystem
     * @return \Illuminate\Http\Response
     */
    public function show(MobileOperatingSystem $mobileOperatingSystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileOperatingSystem  $mobileOperatingSystem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operating = MobileOperatingSystem::find($id);
        return view('management/mobile_operating_system/edit',compact('operating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MobileOperatingSystem  $mobileOperatingSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $operating = MobileOperatingSystem::find($id);
        $operating->name         =   $request->name;
        $operating->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $operating->description  =   $request->description;
        $operating->updated_by   =    auth()->user()->id;
        $operating->save();
        return redirect()->route('mobile-operating-system.index')->with('success', "Mobile Operating System Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileOperatingSystem  $mobileOperatingSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operating = MobileOperatingSystem::find($id);
        $operating->update([
            'deleted_by' => auth()->user()->id,
        ]);
        MobileOperatingSystem::find($id)->delete();
        return redirect()->route('mobile-operating-system.index')->with('success','Mobile Operating System deleted successfully');
    }
}
