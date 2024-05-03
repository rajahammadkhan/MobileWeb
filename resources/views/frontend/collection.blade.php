@extends('frontend.layouts.master')
@section('content')
<section class="about-section">
    <div class="container  py-5">
        <div class="row  pb-5 h-100">
            <div class="col-md-2 px-0">
                <div class="card">
                    <div class="card-body">
                        <div class="accordion accordion-flush filters" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Brands
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @if(count($brands) > 0)
                                            @foreach($brands as $brand)
                                                <li>
                                                    <input type="checkbox" @if(isset($_GET['brand_id']) && $brand->id == $_GET['brand_id']) checked @endif name="brand_id[]" class="submit-form form-check" value="{{ $brand->id }}" id="{{ $brand->name }}">
                                                    <label for="{{ $brand->name }}">{{ $brand->name }}</label>
                                                </li>
                                            @endforeach
                                        @endif                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-flush filters" id="accordionFlush2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse2" aria-expanded="false"
                                        aria-controls="flush-collapse">
                                        Price
                                    </button>
                                </h2>
                                <div id="flush-collapse2" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-heading2" data-bs-parent="#accordionFlush2">
                                    <div class="accordion-body">
                                        <ul>
                                            @php
                                                $priceMini = isset($_GET['price_mini']) ? floatval($_GET['price_mini']) : null;
                                                $priceMax = isset($_GET['price_max']) ? floatval($_GET['price_max']) : null;
                                            @endphp
                                            
                                            <li>
                                                <input type="checkbox" @if($priceMini >= 0 && $priceMax <= 50) checked @endif class="submit-form form-check" value="0-50" name="mobile_price[]" id="upto50">
                                                <label for="upto50">Up to $50</label></li>
                                            <li>
                                                <input type="checkbox" @if($priceMini >= 50 && $priceMax <= 100) checked @endif class="submit-form form-check" value="50-100" name="mobile_price[]" id="upto100">
                                                <label for="upto100">$50 to $100</label></li>
                                            <li>
                                                <input type="checkbox" @if($priceMini >= 100 && $priceMax <= 150) checked @endif class="submit-form form-check" value="100-150" name="mobile_price[]" id="upto150">
                                                <label for="upto150">$100 to $150</label></li>
                                            <li>
                                                <input type="checkbox" @if($priceMini >= 150 && $priceMax <= 250) checked @endif class="submit-form form-check" value="150-250" name="mobile_price[]" id="upto250">
                                                <label for="upto250">$150 to $250</label></li>
                                            <li>
                                                <input type="checkbox" @if($priceMini >= 250 && $priceMax <= 400) checked @endif class="submit-form form-check" value="250-400" name="mobile_price[]" id="upto400">
                                                <label for="upto400">$250 to $400</label></li>
                                            <li>
                                                <input type="checkbox" @if($priceMini >= 400 && $priceMax <= 600) checked @endif class="submit-form form-check" value="400-600" name="mobile_price[]" id="upto600">
                                                <label for="upto600">$400 to $600</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-flush filters" id="accordionFlush3">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse3" aria-expanded="false"
                                        aria-controls="flush-collapse">
                                        Ram
                                    </button>
                                </h2>
                                <div id="flush-collapse3" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-heading3" data-bs-parent="#accordionFlush3">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '2' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="2" name="mobile_ram[]" id="2GB">
                                                <label for="2GB">2GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '4' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="4" name="mobile_ram[]" id="4GB">
                                                <label for="4GB">4GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '6' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="6" name="mobile_ram[]" id="6GB">
                                                <label for="6GB">6GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '8' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="8" name="mobile_ram[]" id="8GB">
                                                <label for="8GB">8GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '16' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="16" name="mobile_ram[]" id="16GB">
                                                <label for="16GB">16GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '32' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="32" name="mobile_ram[]" id="32GB">
                                                <label for="32GB">32GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '64' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="64" name="mobile_ram[]" id="64GB">
                                                <label for="64GB">64GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '128' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="128" name="mobile_ram[]" id="128GB">
                                                <label for="128GB">128GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_1']) && '256' == $_GET['ram_1']) checked @endif class="submit-form form-check" value="256" name="mobile_ram[]" id="256GB">
                                                <label for="256GB">256GB & Above </label></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-flush filters" id="accordionFlush4">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse4" aria-expanded="false"
                                        aria-controls="flush-collapse">
                                        Rom
                                    </button>
                                </h2>
                                <div id="flush-collapse4" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-heading4" data-bs-parent="#accordionFlush4">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_2']) && '8' == $_GET['ram_2']) checked @endif class="submit-form form-check" value="8" name="mobile_rom[]" id="rom8GB">
                                                <label for="rom8GB">8GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_2']) && '16' == $_GET['ram_2']) checked @endif class="submit-form form-check" value="16" name="mobile_rom[]" id="rom16GB">
                                                <label for="rom16GB">16GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_2']) && '32' == $_GET['ram_2']) checked @endif class="submit-form form-check" value="32" name="mobile_rom[]" id="rom32GB">
                                                <label for="rom32GB">32GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_2']) && '64' == $_GET['ram_2']) checked @endif class="submit-form form-check" value="64" name="mobile_rom[]" id="rom64GB">
                                                <label for="rom64GB">64GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_2']) && '128' == $_GET['ram_2']) checked @endif class="submit-form form-check" value="128" name="mobile_rom[]" id="rom128GB">
                                                <label for="rom128GB">128GB </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['ram_2']) && '256' == $_GET['ram_2']) checked @endif class="submit-form form-check" value="256" name="mobile_rom[]" id="rom256GB">
                                                <label for="rom256GB">256GB & Above </label></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-flush filters" id="accordionFlush5">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading5">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse5" aria-expanded="false"
                                        aria-controls="flush-collapse">
                                        Camera
                                    </button>
                                </h2>
                                <div id="flush-collapse5" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-heading5" data-bs-parent="#accordionFlush5">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="2-3" name="mobile_camera[]" id="mp2 ">
                                                <label for="mp2 ">2 to 3 MP </label></li>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="3-5" name="mobile_camera[]" id="mp3 ">
                                                <label for="mp3 ">3 to 5 MP </label></li>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="5-8" name="mobile_camera[]" id="mp5 ">
                                                <label for="mp5 ">5 to 8 MP </label></li>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="8-16" name="mobile_camera[]" id="mp8 ">
                                                <label for="mp8 ">8 to 16 MP </label></li>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="16-32" name="mobile_camera[]" id="mp16">
                                                <label for="mp16">16 to 32 MP </label></li>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="32-64" name="mobile_camera[]" id="mp32">
                                                <label for="mp32">32 to 64 MP </label></li>
                                            <li>
                                                <input type="checkbox" class="submit-form form-check" value="64-1000" name="mobile_camera[]" id="mp64">
                                                <label for="mp64">64 MP & Above</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-flush filters" id="accordionFlush6">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading6">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse6" aria-expanded="false"
                                        aria-controls="flush-collapse">
                                        OS
                                    </button>
                                </h2>
                                <div id="flush-collapse6" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-heading6" data-bs-parent="#accordionFlush6">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['os']) && in_array('Android', $_GET['os'])) checked @endif class="submit-form form-check" value="Android" name="mobile_os[]" id="osAndroid">
                                                <label for="osAndroid">Android </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['os']) && in_array('BlackBerry', $_GET['os'])) checked @endif class="submit-form form-check" value="BlackBerry" name="mobile_os[]" id="osBlackBerry">
                                                <label for="osBlackBerry">BlackBerry </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['os']) && in_array('iOS', $_GET['os'])) checked @endif class="submit-form form-check" value="iOS" name="mobile_os[]" id="osiOS">
                                                <label for="osiOS">iOS </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['os']) && in_array('Windows', $_GET['os'])) checked @endif class="submit-form form-check" value="Windows" name="mobile_os[]" id="osWindows">
                                                <label for="osWindows">Windows </label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-flush filters" id="accordionFlush7">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading7">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse7" aria-expanded="false"
                                        aria-controls="flush-collapse">
                                        SIM
                                    </button>
                                </h2>
                                <div id="flush-collapse7" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-heading7" data-bs-parent="#accordionFlush7">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['no_of_sim']) && '1' == $_GET['no_of_sim']) checked @endif  class="submit-form form-check" value="1" name="mobile_sim[]" id="simSingle">
                                                <label for="simSingle">Single </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['no_of_sim']) && '2' == $_GET['no_of_sim']) checked @endif  class="submit-form form-check" value="2" name="mobile_sim[]" id="simDouble">
                                                <label for="simDouble">Double </label></li>
                                            <li>
                                                <input type="checkbox" @if(isset($_GET['no_of_sim']) && '3' == $_GET['no_of_sim']) checked @endif  class="submit-form form-check" value="3" name="mobile_sim[]" id="simTriple">
                                                <label for="simTriple">Triple </label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <!--Latest Mobile-->
                <div class="card">
                    <div class="card-body">
                        <div class="row w-100 mx-auto">
                            <div class="col-md-8">
                                <h5 class="fs-24 text-grey mt-1">
                                    Samsung Mobile Phones
                                </h5>
                            </div>
                            <hr>
                        </div>
                        <div class="row custom-row w-100 mx-auto product-grid">
                            @include('frontend.snippets.mobile')
                        </div>
                    </div>
                </div>
                <!--End Latest Mobile-->
                <!--Ads-->
                <div class="ad py-5">
                    <div class="row w-100 mx-auto">
                        <div class="col-md-6 mx-auto">
                            <a href="">
                                <img class="w-100" src="{{asset('frontend//images/product/squarespace.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <a href="">
                                <img class="w-100" src="{{asset('frontend//images/product/squarespace.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Ads-->
            </div>
        </div>
    </div>
</section>
<!--  End of About Section-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".submit-form").click(function() {
            $('.product-grid').html('');
            var brand_id = $("input[name='brand_id[]']:checked").map(function(item) {
                return $(this).val();
            }).get();
            var mobile_price = $("input[name='mobile_price[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var mobile_ram = $("input[name='mobile_ram[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var mobile_rom = $("input[name='mobile_rom[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var mobile_camera = $("input[name='mobile_camera[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var mobile_os = $("input[name='mobile_os[]']:checked").map(function() {
                return $(this).val();
            }).get();
            var mobile_sim = $("input[name='mobile_sim[]']:checked").map(function() {
                return $(this).val();
            }).get();
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
            $.ajax({
                type: 'GET',
                url: "{{ url('fetch-collection') }}",
                data: {
                    'brand_id': brand_id,
                    'mobile_price': mobile_price,
                    'mobile_ram': mobile_ram,
                    'mobile_rom': mobile_rom,
                    'mobile_camera': mobile_camera,
                    'mobile_os': mobile_os,
                    'mobile_sim': mobile_sim,
                },
                contentType: "application/json",
                success: function(data) {
                    console.log(data);
                    $('.product-grid').html(data);
                }
            });
        });
    });
</script>
@endsection