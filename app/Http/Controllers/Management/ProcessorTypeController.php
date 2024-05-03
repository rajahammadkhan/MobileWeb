<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\ProcessorType;
use Illuminate\Http\Request;

class ProcessorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = ProcessorType::get();
        return view('management/mobile_processor_type/index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('management/mobile_processor_type/create');
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
        $type               =   new ProcessorType;
        $type->name         =   $request->name;
        $type->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $type->description  =   $request->description;
        $type->created_by  =    auth()->user()->id;
        $type->save();
        return redirect()->route('mobile-processor-type.index')->with('success', "Mobile Processor Type Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProcessorType  $processorType
     * @return \Illuminate\Http\Response
     */
    public function show(ProcessorType $processorType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProcessorType  $processorType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = ProcessorType::find($id);
        return view('management/mobile_processor_type/edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProcessorType  $processorType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $type = ProcessorSize::find($id);
        $type->name         =   $request->name;
        $type->slug         =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $type->description  =   $request->description;
        $type->updated_by   =    auth()->user()->id;
        $type->save();
        return redirect()->route('mobile-processor-type.index')->with('success', "Mobile Processor Type Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProcessorType  $processorType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = ProcessorType::find($id);
        $type->update([
            'deleted_by' => auth()->user()->id,
        ]);
        ProcessorType::find($id)->delete();
        return redirect()->route('mobile-processor-type.index')->with('success','Mobile Processor Type deleted successfully');
    }
}
