@extends('management.layouts.master')
@section('title')
      Media Edit - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Media</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('media.update',$media->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Unique Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{$media->unique_name ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="unique_name" placeholder="Unique Name" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Link </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->media ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="link" placeholder="Link">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Base Url </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->base_url ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="base_url" placeholder="Base Url">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Extension </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->extension ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="extension" placeholder="Extension">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Size </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->size ?? ''}}" type="text" id="erp_question_text"
                                                       class="form-control" name="size" placeholder="Size">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Alt Tag </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->alt_tag ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="alt_tag" placeholder="Alt Tag">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->title ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="title" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Batch NO </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $media->batch_no ?? '' }}" type="text" id="erp_question_text"
                                                       class="form-control" name="batch_no" placeholder="Batch NO">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Media Description </strong></label>
                                            <textarea value="{{$media->description ?? '' }}" type="text" name="description"
                                                      id="description"  class="ckeditor form-control choices" cols="30"
                                                      rows="10"
                                            >{{$media->description ?? '' }}</textarea>
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
