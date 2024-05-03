@extends('management.layouts.master')
@section('title')
      Operating System Edit - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Operating System</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('mobile-operating-system.update',$operating->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Operating System Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{$operating->name ?? '' }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Operating System Description </strong></label>
                                            <textarea value="{{$operating->description ?? '' }}" type="text" name="description"
                                                      id="description"  class="ckeditor form-control choices" cols="30"
                                                      rows="10"
                                            >{{$operating->description ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary  my-2 float-right"> Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection
