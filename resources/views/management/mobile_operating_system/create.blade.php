@extends('management.layouts.master')
@section('title')
        Operating System - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Operating System</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('mobile-operating-system.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('mobile-operating-system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Operating System Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('name') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Operating System Description </strong></label>
                                            <textarea value="{{old('description') }}" type="text" name="description"
                                                      id="description"  class="ckeditor form-control choices" cols="30"
                                                      rows="10"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary pl-2 mt-5 float-right"> Submit   </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection
