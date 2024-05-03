@extends('management.layouts.master')
@section('title')
    Mobile Create - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Mobile</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('mobiles.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('mobiles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Mobile Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('name') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Mobile Price PKR </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('price_pkr') }}" type="number" id="erp_question_text"
                                                       class="form-control" name="price_pkr" placeholder="Mobile Price PKR">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Mobile Price USD </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('price_usd') }}" type="number" id="erp_question_text"
                                                       class="form-control" name="price_usd" placeholder="Mobile Price USD">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Short Description </strong></label>
                                            <textarea value="{{old('short_description') }}" type="text" name="short_description"
                                                      id="short_description"  class="ckeditor form-control choices" cols="30"
                                                      rows="10"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1">   <strong> Long Description </strong></label>
                                            <textarea value="{{old('long_description') }}" type="text" name="long_description"
                                                      id="long_description"  class="ckeditor form-control choices" cols="30"
                                                      rows="10"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection
