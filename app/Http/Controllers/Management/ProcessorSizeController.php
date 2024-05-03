<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\ProcessorSize;
use Illuminate\Http\Request;

class ProcessorSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = ProcessorSize::get();
        return view('management/mobile_processor_size/index', compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/mobile_processor_size/create');
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
        $size               =   new ProcessorSize;
        $size->name         =   $request->name;
        $size->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $size->description  =   $request->description;
        $size->created_by  =    auth()->user()->id;
        $size->save();
        return redirect()->route('mobile-processor-size.index')->with('success', "Mobile Processor Size Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProcessorSize  $processorSize
     * @return \Illuminate\Http\Response
     */
    public function show(ProcessorSize $processorSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProcessorSize  $processorSize
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = ProcessorSize::find($id);
        return view('management/mobile_processor_size/edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProcessorSize  $processorSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $size = ProcessorSize::find($id);
        $size->name         =   $request->name;
        $size->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $size->description  =   $request->description;
        $size->updated_by   =    auth()->user()->id;
        $size->save();
        return redirect()->route('mobile-processor-size.index')->with('success', "Mobile Processor Size Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProcessorSize  $processorSize
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = ProcessorSize::find($id);
        $size->update([
            'deleted_by' => auth()->user()->id,
        ]);
        ProcessorSize::find($id)->delete();
        return redirect()->route('mobile-processor-size.index')->with('success','Mobile Processor Size deleted successfully');
    }
}
