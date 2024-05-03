@extends('management.layouts.master')
@section('title')
    Media Create - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Media</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('media.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Unique Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('unique_name') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="unique_name" placeholder="Unique Name" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Link </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('link') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="link" placeholder="Link">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Base Url </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('base_url') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="base_url" placeholder="Base Url">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Extension </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('extension') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="extension" placeholder="Extension">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Size </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('size') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="size" placeholder="Size">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Alt Tag </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('alt_tag') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="alt_tag" placeholder="Alt Tag">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('title') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="title" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Batch NO </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('batch_no') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="batch_no" placeholder="Batch NO">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Media Description </strong></label>
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
