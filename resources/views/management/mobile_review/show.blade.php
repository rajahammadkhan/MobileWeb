@extends('management.layouts.master')
@section('title')
    Review Detail
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Review Detail</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card pt-4">
                                <div class="header">
                                    <div>
                                        <h6>Name</h6>
                                        <p>{{$data->name  ?? ''}}</p>
                                    </div>
                                    <div>
                                        <h6>Mobile Name</h6>
                                        <p>
                                            {{$data->mobile->name ?? ''}}
                                        </p>
                                    </div>
                                    <div>
                                        <h6>Email</h6>
                                        <p>
                                            {{$data->email ?? ''}}
                                        </p>
                                    </div>
                                    <div>
                                        <h6>star</h6>
                                        <p>{{$data->star ?? ''}}</p>
                                    </div>
                                     <div>
                                    <h6>Status</h6>
                                        @if ($data->reviews_status == 1)
                                            <label class="badge badge-info" data-toggle="modal"
                                                   data-target="#active_inactive">Approved</label>
                                        @else
                                            <label class="badge badge-danger" data-toggle="modal"
                                                   data-target="#active_inactive">Pending</label>
                                        @endif
                                     </div>
                                    <div>
                                        <h6>feedback</h6>
                                        <p>{{$data->feedback ?? ''}}</p>
                                    </div>
                                    <div class="text-right">
                                        <h6>Date / Time</h6>
                                        <p class="m-0">{{$data->created_at ?? ''}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

