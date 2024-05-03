@extends('frontend.layouts.master')
@section('content')
        <!--    Hero Section-->
        <div class="container-fluid about-hero-section">
            <div class="row h-100 align-items-center">
                <div class="col-md-12 px-0 text-center">
                    <h1 class="fs-65">
                        Advanced Search
                    </h1>
                </div>
            </div>
        </div>
        <!--   End of Hero Section-->
        <!--    Hero Section-->
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card advanced-search-form">
                        <div class="card-body">
                            <form method="Get" action="{{ route('advanced-collection') }}">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <h4 class="c-border">Advanced Search</h4>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <h6 class="c-border"> General</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="brand_id" id="brand_id">
                                            <option value="">Select Brand</option>
                                            @if(count($brands)>0)
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id ?? ''}}">{{$brand->name ?? ''}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="" id="">
                                            <option value="">Availability</option>
                                            <option value="">Brand</option>
                                            <option value="">Brand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <h6 class="c-border"> Network</h6>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="network[]" value="g2" class="btn-check" id="btn-check-2">
                                        <label class="btn" for="btn-check-2">2G</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="network[]" value="g3" class="btn-check" id="btn-check-3">
                                        <label class="btn" for="btn-check-3">3G</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="network[]" value="g4" class="btn-check" id="btn-check-4">
                                        <label class="btn" for="btn-check-4">4G</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="network[]" value="g5" class="btn-check" id="btn-check-5" autocomplete="off">
                                        <label class="btn" for="btn-check-5">5G</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <h6 class="c-border"> SIM</h6>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="mini">
                                        <label class="btn " for="mini">Mini</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="micro">
                                        <label class="btn " for="micro">Micro</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="nano">
                                        <label class="btn " for="nano">Nano</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="e-sim" autocomplete="off">
                                        <label class="btn " for="e-sim">e SIM</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <h6 class="c-border"> Camera</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="type_id">
                                             <option value="">Select Camera</option>
                                            <option value="1">Front Camera</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="type_id">
                                             <option value="">Select Camera</option>
                                            <option value="2">Back Camera</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <h6 class="c-border"> OS</h6>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="os[]" value="Android" class="btn-check" id="android">
                                        <label class="btn" for="android">Android</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="os[]" value="Black Berry" class="btn-check" id="Black">
                                        <label class="btn" for="Black">Black Berry</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="os[]" value="IOS"  class="btn-check" id="IOS">
                                        <label class="btn" for="IOS">IOS</label>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <input type="checkbox" name="os[]" value="Windows" class="btn-check" id="Windows" autocomplete="off">
                                        <label class="btn" for="Windows">Windows</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h6 class="c-border">Screen Size</h6>
                                        <select class="form-control" name="size">
                                            <option value="">Select Screen Size</option>
                                            @if(count($generals)>0)
                                            @foreach($generals as $general)
                                            <option value="{{$general->size}}">{{$general->size}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <h6 class="c-border">Sensor</h6>
                                        <select class="form-control" name="">
                                            <option value="">Sensor</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                        </select>


                                        <h6 class="c-border">Weight</h6>
                                        <select class="form-control" name="weight">
                                            <option value="">Select Weight</option>
                                            @if(count($bodys)>0)
                                            @foreach($bodys as $body)
                                            <option value="{{$body->weight}}">{{$body->weight}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <h6 class="c-border">Audio</h6>
                                        <select class="form-control" name="">
                                            <option value="">Audio</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="c-border">Battery</h6>
                                        <select class="form-control" name="capacity">
                                            <option value="" selected disabled>Select Battery</option>
                                            @if(count($batterys)>0)
                                            @foreach($batterys as $battery)
                                            <option value="{{$battery->capacity}}">{{$battery->capacity}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <h6 class="c-border">Connectivity</h6>
                                        <select class="form-control" name="usb">
                                            <option value="" selected disabled>Bluetooth/GPS/USB...</option>
                                            @if(count($networks)>0)
                                            @foreach($networks as $network)
                                            <option value="{{$network->usb}}">{{$network->usb}}</option>
                                            @endforeach
                                            @endif
                                        </select>


                                        <h6 class="c-border">Color</h6>
                                        <select class="form-control" name="colors">
                                            <option value="">Color</option>
                                            @if(count($bodys)>0)
                                            @foreach($bodys as $body)
                                            <option value="{{$body->colors}}">{{ json_decode($body->colors)[0] ?? ''}} </option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <h6 class="c-border">Pixel Density</h6>
                                        <select class="form-control" name="">
                                            <option value="">Density</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-5 align-items-center">
                                    <div class="col-md-10 mx-auto">
                                        <label for="customRange1" class="form-label d-block">Internal Storage:</label>
                                        <div class="row">
                                            <div class="col-md-6 mt-4" bis_skin_checked="1">
                                                <select class="form-control" name="ram_1">
                                                    <option value="">Min Ram</option>
                                                    @if(count($memorys)>0)
                                                    @foreach($memorys as $memory)
                                                    <option value="{{$memory->ram_1}}">{{$memory->ram_1}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4" bis_skin_checked="1">
                                                <select class="form-control" name="ram_2">
                                                    <option value="">Max Ram</option>
                                                    @if(count($memorys)>0)
                                                    @foreach($memorys as $memory)
                                                    <option value="{{$memory->ram_2}}">{{$memory->ram_2}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4" bis_skin_checked="1">
                                                <select class="form-control" name="built_in_memory_1">
                                                    <option value="">Min Rom</option>
                                                    @if(count($memorys)>0)
                                                    @foreach($memorys as $memory)
                                                    <option value="{{$memory->built_in_memory_1}}">{{$memory->built_in_memory_1}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4" bis_skin_checked="1">
                                                <select class="form-control" name="built_in_memory_2">
                                                    <option value="">Max Rom</option>
                                                    @if(count($memorys)>0)
                                                    @foreach($memorys as $memory)
                                                    <option value="{{$memory->built_in_memory_2}}">{{$memory->built_in_memory_2}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4" bis_skin_checked="1">
                                                <select class="form-control" name="price_mini">
                                                    <option value="">Min Price</option>
                                                    @if(count($mobilesmini)>0)
                                                    @foreach($mobilesmini as $mini)
                                                    <option value="{{$mini->price_usd}}">{{$mini->price_usd}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-4" bis_skin_checked="1">
                                                <select class="form-control" name="price_max">
                                                    <option value="">Max Price</option>
                                                    @if(count($mobilesmax)>0)
                                                    @foreach($mobilesmax as $max)
                                                    <option value="{{$max->price_usd}}">{{$max->price_usd}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row mt-5 align-items-center">
                                    <div class="col-md-6 mx-auto text-center">
                                        <button type="submit" class="btn btn-send">Search Results</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   End of Hero Section-->
@endsection