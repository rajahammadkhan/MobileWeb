@extends('management.layouts.master ')

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{url('/')}}">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Widgets -->
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Brand</div>
                    <h3 class="m-b-10">{{count($brand)}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <div class="chart chart-bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Category</div>
                    <h3 class="m-b-10">{{count($category)}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <span class="chart chart-line"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Mobile</div>
                    <h3 class="m-b-10">{{count($mobile)}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                    <div class="icon">
                        <div class="chart chart-pie"></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- #END# Widgets -->
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header d-flex justify-content-between">
                        <h2>
                            <strong>Recent </strong>Contacts</h2>
                        <a href="{{url('admin/contacts')}}">View All</a>
                    </div>
                    <div class="body">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($contacts)>0)
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td> {{$contact->name ?? ''}}</td>
                                            <td> {{$contact->email ?? ''}}</td>
                                            <td>{{$contact->created_at->format('m/d/Y') ?? ''}}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header d-flex justify-content-between">
                        <h2>
                            <strong>Recent </strong>Reviews</h2>
                        <a href="{{url('admin/reviews')}}">View All</a>
                    </div>
                    <div class="body">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Mobile Name</th>
                                        <th class="border-top-0">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($reviews)>0)
                                    @foreach($reviews as $review)
                                        <tr>
                                            <td> {{$review->name ?? ''}}</td>
                                            <td> {{$review->email ?? ''}}</td>
                                            <td> {{$review->mobile->name ?? ''}}</td>
                                            <td>{{$review->created_at->format('m/d/Y') ?? ''}}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
