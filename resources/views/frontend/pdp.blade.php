<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDP - Axe Mobile </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="highest quality specialty coffee beans.">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/324353ac19.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/zjthdtf0rgc8db17hnq9jgza0s9oz2j2srtnpp6qo5godz5n/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <style>
        .rate {
            /* float: left; */
            height: 46px;
            padding: 0 10px;
            display: flex;
            justify-content: center;
            flex-direction: row-reverse;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            /* float:right; */
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: rgba(254, 101, 43, 1) !important;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: rgba(254, 101, 43, 1) !important;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: rgba(254, 101, 43, 1) !important;
        }
        
        .peelay {
          color: rgba(254, 101, 43, 1) !important;
        }
        
        .pheekay {
          color: #c2ccd4;
        }
    </style>
</head>

<body>

    <div id="section-header">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img class="w-100" src="{{asset('frontend/images/a9-logo.png')}}" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/brand')}}">Brand</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/pdp')}}">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flx desktop-show" role="search">
                        <a href="{{url('/advanced-search')}}" class="btn btn-review float-end">Advanced Search</a>
    
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                            <path d="M2 1.5H24" stroke="black" stroke-width="3" stroke-linecap="round"/>
                            <path d="M2 12.5H24" stroke="black" stroke-width="3" stroke-linecap="round"/>
                            <path d="M2 23.5H24" stroke="black" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </header>
    </div>

    <div id="section-main" class="pdp">
        <!--    Hero Section-->
        <!--    <div class="container pb-5">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-12">-->
        <!--                <a href="advanced-search.html" class="btn btn-review float-end">Advanced Search</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <div class="container py-5">
            <div class="row h-100 align-items-top justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="slider-nav">
                                @if(count($mobile->mediaImages)>0)
                                    @foreach($mobile->mediaImages as $image)
                                        <div>
                                            <img src="{{ asset('media/mobile/' . $image->unique_name) }}" alt="{{ $image->alt_tag ?? '' }}">
                                        </div>
                                    @endforeach
                                @else
                                    <img src="{{ asset('media/mobile/galleryimage.png') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-10 product-image">
                            <div class="slider-for">
                                @if(count($mobile->mediaImages)>0)
                                    @foreach($mobile->mediaImages as $image)
                                <div><img src="{{ asset('media/mobile/' . $image->unique_name) }}"
                                        href="{{ asset('media/mobile/' . $image->unique_name) }}" data-fancybox="gallery" alt="">
                                </div>
                                @endforeach
                                @else
                                    <img src="{{ asset('media/mobile/galleryimage.png') }}" alt="">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="fs-32 text-grey m-0">
                        {{$mobile->name ?? ''}}
                    </h3>
                    <h4 class="fs-20">
                        {{$mobile->brand->name ?? ''}}
                    </h4>
                    <div class="product-price">
                        <p class="fs-22">Rs: {{number_format($mobile->price_pkr ?? '')}}/</p>
                        <p class="fs-22">USD: {{number_format($mobile->price_usd ?? '')}}/</p>
                    </div>
                    <hr>
                    <div class="product-description">
                        {!! $mobile->long_description ?? '' !!}
                    </div>

                    <div class="social-sharing my-4 fs-16 text-grey">
                        <span>Share this Product:</span>

                        <span>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18"
                                    fill="none">
                                    <path
                                        d="M7.59997 3.43271H9.16663V0.782707C8.40809 0.70383 7.64593 0.664887 6.8833 0.666041C4.61663 0.666041 3.06663 2.04937 3.06663 4.58271V6.76604H0.508301V9.73271H3.06663V17.3327H6.1333V9.73271H8.6833L9.06663 6.76604H6.1333V4.87437C6.1333 3.99937 6.36663 3.43271 7.59997 3.43271Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M13 0H3C1.34315 0 0 1.34315 0 3V13C0 14.6569 1.34315 16 3 16H13C14.6569 16 16 14.6569 16 13V3C16 1.34315 14.6569 0 13 0Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="">
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 2.41895C17.3229 2.71429 16.6068 2.91058 15.8737 3.00178C16.6463 2.5434 17.2239 1.81755 17.497 0.961778C16.7739 1.39068 15.9827 1.69276 15.1577 1.85494C14.6517 1.31435 13.9948 0.938484 13.2723 0.776218C12.5499 0.613953 11.7954 0.672792 11.1068 0.945086C10.4183 1.21738 9.82756 1.69053 9.4115 2.30303C8.99545 2.91552 8.7733 3.63902 8.77392 4.37945C8.77108 4.662 8.79977 4.94398 8.85946 5.22016C7.39141 5.14819 5.95509 4.76719 4.64438 4.10208C3.33368 3.43696 2.1781 2.5027 1.25321 1.36038C0.77836 2.17215 0.631209 3.13453 0.841789 4.0511C1.05237 4.96767 1.60481 5.76932 2.38634 6.29244C1.80246 6.27666 1.23093 6.12077 0.719905 5.8379V5.87811C0.720866 6.73027 1.01538 7.55609 1.55387 8.21655C2.09237 8.877 2.84196 9.33178 3.67647 9.50432C3.36076 9.58754 3.0354 9.62841 2.70892 9.62586C2.47449 9.63 2.2403 9.60886 2.0104 9.56281C2.2489 10.2952 2.70854 10.9356 3.32606 11.396C3.94358 11.8563 4.68861 12.1139 5.45859 12.1334C4.1524 13.1549 2.54149 13.709 0.883295 13.7073C0.588081 13.7093 0.293045 13.6923 0 13.6565C1.68735 14.7438 3.65358 15.319 5.66091 15.3125C12.4513 15.3125 16.164 9.68763 16.164 4.81187C16.164 4.64866 16.1583 4.4913 16.1504 4.33486C16.8783 3.81397 17.5051 3.16471 18 2.41895Z"
                                        fill="white" />
                                </svg>

                            </a>
                        </span>

                    </div>
                </div>
            </div>
        </div>
        <!--   End of Hero Section-->




        <div class="container pb-5">

            <div class="row row-reverse justify-content-center">
                
                <div class="col-md-2">
                    <iframe id="aswift_0" name="aswift_0" style="border:0;width:100%;height:600px;"
                        sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                        width="160" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0"
                        allowtransparency="true" scrolling="no"
                        src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1252604155088200&amp;output=html&amp;h=600&amp;slotname=8684369973&amp;adk=4275555017&amp;adf=3173046724&amp;pi=t.ma~as.8684369973&amp;w=160&amp;fwrn=3&amp;lmt=1689473346&amp;format=160x600&amp;url=https%3A%2F%2Fwww.whatmobile.com.pk%2F&amp;ea=0&amp;wgl=1&amp;uach=WyJtYWNPUyIsIjEwLjE1LjciLCJ4ODYiLCIiLCIxMTQuMC41NzM1LjE5OCIsW10sMCxudWxsLCI2NCIsW1siTm90LkEvQnJhbmQiLCI4LjAuMC4wIl0sWyJDaHJvbWl1bSIsIjExNC4wLjU3MzUuMTk4Il0sWyJHb29nbGUgQ2hyb21lIiwiMTE0LjAuNTczNS4xOTgiXV0sMF0.&amp;dt=1689473345795&amp;bpp=5&amp;bdt=344&amp;idt=759&amp;shv=r20230711&amp;mjsv=m202307110102&amp;ptt=9&amp;saldr=aa&amp;cookie=ID%3Dafe09a7648f8470e%3AT%3D1689430154%3ART%3D1689430154%3AS%3DALNI_MZC4HSCjev9-b70T44IYd_XazK0FQ&amp;gpic=UID%3D00000c6a0d4a3122%3AT%3D1689430154%3ART%3D1689430154%3AS%3DALNI_MZ36xaTqVEUa-u3hVPq2aMTD4ZvGg&amp;correlator=526917933042&amp;frm=23&amp;ife=4&amp;pv=1&amp;ga_vid=1703245567.1689473344&amp;ga_sid=1689473347&amp;ga_hid=469682911&amp;ga_fc=1&amp;nhd=1&amp;u_tz=-420&amp;u_his=3&amp;u_h=900&amp;u_w=1440&amp;u_ah=814&amp;u_aw=1440&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=221&amp;ady=304&amp;biw=1440&amp;bih=732&amp;isw=160&amp;ish=600&amp;ifk=473354326&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759842%2C31075850%2C31076010%2C31076129%2C31076160%2C44788441&amp;oid=2&amp;pvsid=1040497233303659&amp;tmod=170809548&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=896&amp;brdim=0%2C23%2C0%2C23%2C1440%2C23%2C1440%2C811%2C160%2C600&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=4&amp;bc=31&amp;ifi=1&amp;uci=1.c67k25iqt7px&amp;fsb=1&amp;dtd=782"
                        data-google-container-id="1.c67k25iqt7px" data-google-query-id="CJfT3eLxkIADFccQ-QAdacIMvA"
                        data-load-complete="true"></iframe>
                    <iframe id="aswift_0" name="aswift_0" style="border:0;width:100%;height:600px;"
                        sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                        width="160" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0"
                        allowtransparency="true" scrolling="no"
                        src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1252604155088200&amp;output=html&amp;h=600&amp;slotname=8684369973&amp;adk=4275555017&amp;adf=3173046725&amp;pi=t.ma~as.8684369973&amp;w=160&amp;fwrn=3&amp;lmt=1689483785&amp;format=160x600&amp;url=https%3A%2F%2Fwww.whatmobile.com.pk%2F&amp;ea=0&amp;wgl=1&amp;uach=WyJtYWNPUyIsIjEwLjE1LjciLCJ4ODYiLCIiLCIxMTQuMC41NzM1LjE5OCIsW10sMCxudWxsLCI2NCIsW1siTm90LkEvQnJhbmQiLCI4LjAuMC4wIl0sWyJDaHJvbWl1bSIsIjExNC4wLjU3MzUuMTk4Il0sWyJHb29nbGUgQ2hyb21lIiwiMTE0LjAuNTczNS4xOTgiXV0sMF0.&amp;dt=1689483716524&amp;bpp=5&amp;bdt=329&amp;idt=142&amp;shv=r20230711&amp;mjsv=m202307110102&amp;ptt=9&amp;saldr=aa&amp;cookie=ID%3Dafe09a7648f8470e-22e9dbadbbe20029%3AT%3D1689430154%3ART%3D1689440309%3AS%3DALNI_MYJSrhs96_iQt_vfOQWo0rmF1fBGA&amp;gpic=UID%3D00000c6a0d4a3122%3AT%3D1689430154%3ART%3D1689440309%3AS%3DALNI_MZ36xaTqVEUa-u3hVPq2aMTD4ZvGg&amp;correlator=156838932731&amp;frm=23&amp;ife=4&amp;pv=1&amp;ga_vid=1703245567.1689473344&amp;ga_sid=1689483785&amp;ga_hid=907033457&amp;ga_fc=1&amp;nhd=1&amp;u_tz=-420&amp;u_his=6&amp;u_h=900&amp;u_w=1440&amp;u_ah=814&amp;u_aw=1440&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=221&amp;ady=304&amp;biw=1440&amp;bih=501&amp;isw=160&amp;ish=600&amp;ifk=473354326&amp;scr_x=0&amp;scr_y=859&amp;eid=44759876%2C44759927%2C44759837%2C31075814%2C44788442%2C44789820&amp;oid=2&amp;pvsid=2114357407530117&amp;tmod=1325595310&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=896&amp;brdim=0%2C23%2C0%2C23%2C1440%2C23%2C1440%2C811%2C160%2C600&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=4&amp;bc=31&amp;ifi=1&amp;uci=1.uyxov992774o&amp;fsb=1&amp;dtd=68542"
                        data-google-container-id="1.uyxov992774o" data-google-query-id="CKX8gdSYkYADFUuwZAodJjkL_g"
                        data-load-complete="true"></iframe>

                </div>
                <div class="col-md-10">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-info" type="button" role="tab" aria-controls="pills-info"
                                aria-selected="false">Product Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Text Reviews</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Video Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-info" role="tabpanel"
                            aria-labelledby="pills-info-tab">
                            <div class="card">
                                <div class="card-body p-md-4">
                                    <h5 class="text-left">Product Information</h5>
                                    <hr>
                                    <div class="row custom-table table-responsive">
                                        <table class="specs" width="604" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="6" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Build</td>
                                            <th align="left" class="fw-normal">OS</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->general->os ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">UI</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->general->ui ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Dimensions</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            164.1 x 75.5 x 8.5 mm &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Weight</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->body->weight ?? ''}} g &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">SIM</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            @if(isset($mobile->body) && $mobile->body != null)    
                                                @if($mobile->body->no_of_sim == 1)
                                                    Single Sim, Single Standby (Nano-SIM)  
                                                @elseif($mobile->body->no_of_sim == 2)
                                                    Dual Sim, Dual Standby (Nano-SIM) 
                                                @elseif($mobile->body->no_of_sim == 3)
                                                    Triple Sim, Triple Standby (Nano-SIM) 
                                                @else
                                                    No Sim Card
                                                @endif  
                                            @endif
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">Colors</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            @if(isset($mobile->body)) {{ json_decode($mobile->body->colors)[0] ?? ''}} @endif &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="3" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Frequency</td>
                                            <th align="left" class="fw-normal">2G Band</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><b>{{$mobile->network->g2 ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">3G Band</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->network->g3 ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">4G Band</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            {{$mobile->network->g4 ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="3" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Processor</td>
                                            <th align="left" class="fw-normal">CPU</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->memory->process_text ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Chipset</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->memory->chipset ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">GPU</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            {{$mobile->memory->gpu ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="4" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Display</td>
                                            <th align="left" class="fw-normal">Technology</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">IPS LCD Capacitive Touchscreen, 16M Colors, Multitouch &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Size</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->general->size ?? ''}} Inches &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Resolution</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            1080 x 2412 Pixels (~400 PPI) &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">Extra Features</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            120Hz &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="2" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Memory</td>
                                            <th align="left" class="fw-normal">Built-in</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->memory->built_in_memory_1 ?? ''}}/{{$mobile->memory->built_in_memory_2 ?? ''}}GB Built-in, {{$mobile->memory->ram_1 ?? ''}}/{{$mobile->memory->ram_2 ?? ''}}GB RAM, UFS 2.1 &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">Card</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            @if(isset($mobile->memory)) {{$mobile->memory->card_supported==1 ? 'Yes' : 'NO'}} @endif &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="3" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Camera</td>
                                            <th align="left" class="fw-normal">Main</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->camera->cam_text ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Features</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            Geo-tagging, face detection, Touch to focus, HDR, Panorama, Video (1080p@30/120fps) &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">Front</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            16 MP, f/2.1, (wide), 1/3.0 &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="6" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Connectivity</td>
                                            <th align="left" class="fw-normal">WLAN</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->network->wlan ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Bluetooth</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->network->bluetooth ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">GPS</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            Yes + A-GPS support, &amp; GLONASS, BDS &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">USB</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->network->usb ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">NFC</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            No &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">Data</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            <font color="#000077"><b>GPRS</b></font>, {{$mobile->network->data ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="7" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Features</td>
                                            <th align="left" class="fw-normal">Sensors</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">Accelerometer, Compass, Fingerprint (side mounted), Gyro, Proximity &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Audio</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->general->audio ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Browser</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->general->browser ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Messaging</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            SMS(threaded view), MMS, Email, Push Mail, IM &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Games</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            Built-in + Downloadable &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal">Torch</th>
                                            <td colspan="2" class="fasla specs-value bottom-border">
                                            {{$mobile->general->torch ?? ''}} &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section">Extra</th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            Glass front, Plastic frame, Plastic back, Document viewer, Photo/video editor &nbsp;
                                            </td>
                                            </tr>
                                            
                                            <tr class="bg-light">
                                            <td rowspan="2" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Battery</td>
                                            <th align="left" class="fw-normal">Capacity</th>
                                            <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->battery->capacity ?? ''}} mAh &nbsp;
                                            </td>
                                            </tr>
                                            <tr class="RowBG1">
                                            <th align="left" class="fw-normal-section"></th>
                                            <td colspan="2" class="fasla specs-value bottom-border-section">
                                            - Fast charging {{$mobile->battery->fast_charging ?? ''}}
                                            &nbsp;
                                            </td>
                                            </tr>
                                            </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <h5>Review</h5>
                            <hr>
                            <div class="card">
                                <div class="card-body p-md-4">
                                    <!--review loop-->
                                    @if(count($reviews)>0)
                                    @foreach($reviews as $review)
                                    <div class="review-card">
                                        <h6 class="name">{{$review->name ?? ''}}</h6>
                                        <p class="date">{{ $review->created_at->format('m/d/Y') }}</p>
                                        <div class="rating">
                                            @for ($x = 1; $x<=$review->star; $x++)
                                                    <i class="fa-solid fa-star peelay" aria-hidden="true"></i>
                                            @endfor

                                            @for ($x = $review->star; $x <= 4; $x++) <i class="fa-solid fa-star pheekay" aria-hidden="true"></i>
                                            @endfor
                                        </div>
                                        <p class="review">{!! $review->feedback !!}</p>
                                    </div>
                                    @endforeach
                                    @endif
                                    <!--End review loop-->
                                    <div class="row align-items-center pt-4">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 col-6 text-center">
                                            <div class="pagination">
                                                <a href="">1</a>
                                                <a href="">2</a>
                                                <a href="">3</a>
                                                <a class="text-orange" href="">Next <i
                                                        class="fa-solid fa-angles-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 text-end">
                                            <button type="submit" class="btn btn-review review-toggle">Post
                                                Review</button>
                                        </div>
                                    </div>
                                    <div class="row align-items-center pt-4">
                                        <div class="col-md-12 textarea">
                                            <form class="ajax-review">
                                             <div class="col-md-12 form-group">
                                                <label class="text-center">Rating</label>
                                                <div class="rate">
                                                    <input class="rating-star" type="radio" id="star5" name="rating"
                                                           value="5"/>
                                                    <label class="rating-star" for="star5" title="text">5
                                                        stars</label>
                                                    <input class="rating-star" type="radio" id="star4" name="rating"
                                                           value="4"/>
                                                    <label class="rating-star" for="star4" title="text">4
                                                        stars</label>
                                                    <input class="rating-star" type="radio" id="star3" name="rating"
                                                           value="3"/>
                                                    <label class="rating-star" for="star3" title="text">3
                                                        stars</label>
                                                    <input class="rating-star" type="radio" id="star2" name="rating"
                                                           value="2"/>
                                                    <label class="rating-star" for="star2" title="text">2
                                                        stars</label>
                                                    <input class="rating-star" type="radio" id="star1" name="rating"
                                                           value="1" required/>
                                                    <label class="rating-star" for="star1" title="text">1
                                                        star</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="text">Name</label>
                                                <input type="text" placeholder="Enter Your Name" class="form-control" id="name"         name="name" required>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="email">Email</label>
                                                <input type="email" placeholder="Enter Your Email" class="form-control" id="email" name="email" required>
                                            </div>
                                            <input type="hidden" name="mobile_id" value="{{$mobile->id ?? ''}}" id="mobile_id">
                                            <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10"></textarea>
                                            <button type="submit" class="btn btn-review my-2 float-end">Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="card">
                                <div class="card-body p-md-4">
                                    <h5 class="text-left">Latest Video Reviews</h5>
                                    <hr>
                                    <div class="row">
                                        @if(isset($mobile->youtube) && $mobile->youtube != null)
                                            @php
                                                $videoLinks = json_decode($mobile->youtube->video_link);
                                            @endphp
                                            @if(is_array($videoLinks) && count($videoLinks) > 0)
                                                @foreach($videoLinks as $videoLink)
                                                    <div class="col-md-4 my-3">
                                                        <div class="card">
                                                            <a href="{{ $videoLink }}"><img class="card-img-top" src="{{ asset('frontend/images/image%2050.png') }}" alt=""></a>
                                                            <div class="card-body">
                                                                <p class="card-text text-uppercase"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endif                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="section-footer">
        <footer>
            <div class="container">
                <div class="row py-3 align-items-center">
                    <div class="col-md-1">
                        <img class="footer-logo" src="{{asset('frontend/images/what-a-mobile.png')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <p class="about">Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="quicklinks">
                            <a href="{{url('/')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M6.77199 5.90801C6.76359 5.90101 6.75239 5.89821 6.74399 5.89121L1.34404 1.00367C1.04023 0.730658 0.547415 0.730658 0.243606 1.00367C0.240806 1.00647 0.239406 1.00926 0.238006 1.01206C0.164442 1.07281 0.105028 1.14888 0.0639187 1.23497C0.022809 1.32106 0.000994537 1.41508 -4.58512e-07 1.51048L-3.1168e-08 11.287C0.00156972 11.3841 0.0244513 11.4797 0.0670288 11.5671C0.109606 11.6544 0.170841 11.7313 0.246407 11.7924L0.243607 11.7952C0.396471 11.9273 0.591774 12 0.793823 12C0.995871 12 1.19117 11.9273 1.34404 11.7952L6.77199 6.89643C6.84348 6.83545 6.90089 6.75968 6.94025 6.67436C6.97961 6.58903 7 6.49619 7 6.40222C7 6.30825 6.97961 6.21541 6.94025 6.13008C6.90089 6.04476 6.84348 5.96899 6.77199 5.90801Z" fill="#61BBFF"/>
                                </svg>
                                Home
                            </a>
                            <a href="{{url('/contact')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M6.77199 5.90801C6.76359 5.90101 6.75239 5.89821 6.74399 5.89121L1.34404 1.00367C1.04023 0.730658 0.547415 0.730658 0.243606 1.00367C0.240806 1.00647 0.239406 1.00926 0.238006 1.01206C0.164442 1.07281 0.105028 1.14888 0.0639187 1.23497C0.022809 1.32106 0.000994537 1.41508 -4.58512e-07 1.51048L-3.1168e-08 11.287C0.00156972 11.3841 0.0244513 11.4797 0.0670288 11.5671C0.109606 11.6544 0.170841 11.7313 0.246407 11.7924L0.243607 11.7952C0.396471 11.9273 0.591774 12 0.793823 12C0.995871 12 1.19117 11.9273 1.34404 11.7952L6.77199 6.89643C6.84348 6.83545 6.90089 6.75968 6.94025 6.67436C6.97961 6.58903 7 6.49619 7 6.40222C7 6.30825 6.97961 6.21541 6.94025 6.13008C6.90089 6.04476 6.84348 5.96899 6.77199 5.90801Z" fill="#61BBFF"/>
                                </svg>
                              Contact Us
                            </a>
                            <a href="{{url('/')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M6.77199 5.90801C6.76359 5.90101 6.75239 5.89821 6.74399 5.89121L1.34404 1.00367C1.04023 0.730658 0.547415 0.730658 0.243606 1.00367C0.240806 1.00647 0.239406 1.00926 0.238006 1.01206C0.164442 1.07281 0.105028 1.14888 0.0639187 1.23497C0.022809 1.32106 0.000994537 1.41508 -4.58512e-07 1.51048L-3.1168e-08 11.287C0.00156972 11.3841 0.0244513 11.4797 0.0670288 11.5671C0.109606 11.6544 0.170841 11.7313 0.246407 11.7924L0.243607 11.7952C0.396471 11.9273 0.591774 12 0.793823 12C0.995871 12 1.19117 11.9273 1.34404 11.7952L6.77199 6.89643C6.84348 6.83545 6.90089 6.75968 6.94025 6.67436C6.97961 6.58903 7 6.49619 7 6.40222C7 6.30825 6.97961 6.21541 6.94025 6.13008C6.90089 6.04476 6.84348 5.96899 6.77199 5.90801Z" fill="#61BBFF"/>
                                </svg>
                                News
                            </a>
                            <a href="{{url('/pdp')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M6.77199 5.90801C6.76359 5.90101 6.75239 5.89821 6.74399 5.89121L1.34404 1.00367C1.04023 0.730658 0.547415 0.730658 0.243606 1.00367C0.240806 1.00647 0.239406 1.00926 0.238006 1.01206C0.164442 1.07281 0.105028 1.14888 0.0639187 1.23497C0.022809 1.32106 0.000994537 1.41508 -4.58512e-07 1.51048L-3.1168e-08 11.287C0.00156972 11.3841 0.0244513 11.4797 0.0670288 11.5671C0.109606 11.6544 0.170841 11.7313 0.246407 11.7924L0.243607 11.7952C0.396471 11.9273 0.591774 12 0.793823 12C0.995871 12 1.19117 11.9273 1.34404 11.7952L6.77199 6.89643C6.84348 6.83545 6.90089 6.75968 6.94025 6.67436C6.97961 6.58903 7 6.49619 7 6.40222C7 6.30825 6.97961 6.21541 6.94025 6.13008C6.90089 6.04476 6.84348 5.96899 6.77199 5.90801Z" fill="#61BBFF"/>
                                </svg>
                                Reviews
                            </a>
                            <a href="{{url('/privacy')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M6.77199 5.90801C6.76359 5.90101 6.75239 5.89821 6.74399 5.89121L1.34404 1.00367C1.04023 0.730658 0.547415 0.730658 0.243606 1.00367C0.240806 1.00647 0.239406 1.00926 0.238006 1.01206C0.164442 1.07281 0.105028 1.14888 0.0639187 1.23497C0.022809 1.32106 0.000994537 1.41508 -4.58512e-07 1.51048L-3.1168e-08 11.287C0.00156972 11.3841 0.0244513 11.4797 0.0670288 11.5671C0.109606 11.6544 0.170841 11.7313 0.246407 11.7924L0.243607 11.7952C0.396471 11.9273 0.591774 12 0.793823 12C0.995871 12 1.19117 11.9273 1.34404 11.7952L6.77199 6.89643C6.84348 6.83545 6.90089 6.75968 6.94025 6.67436C6.97961 6.58903 7 6.49619 7 6.40222C7 6.30825 6.97961 6.21541 6.94025 6.13008C6.90089 6.04476 6.84348 5.96899 6.77199 5.90801Z" fill="#61BBFF"/>
                                </svg>
                                Privacy Policy
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                    </div>
                </div>
    
                <div class="row bottom-bar">
                    <div class="col-md-12 copyright text-center">
                        <p>Copyright (c) 2023 Kinfolk. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        $(document).ready(function() {
        $(document).on('submit', '.ajax-review', function(event) {
        var formData = {
            name:$('#name').val(),
            email:$('#email').val(),
            feedback: $('#feedback').val(),
            mobile_id:$('#mobile_id').val(),
            rating:$('input[name="rating"]:checked').val()
        };
        event.preventDefault();
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }});
        $.ajax({
            url: "{{ route('review') }}",
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.success) {
                    $("form")[0].reset();
                    toastr.success('Review Submitted Successfully', { timeOut: 2000 });
                }
                else {
                    toastr.error('Form submission failed.', { timeOut: 2000 });
                }
            },
            error: function() {
                toastr.error('Error submitting form.', { timeOut: 2000 });
            }
        });
    });
});
</script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
        $(document).ready(function () {
            $('.textarea').hide();
            $('.review-toggle').on('click', function () {
                $('.textarea').toggle();
            })
        })
        AOS.init();

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({

            slidesToShow: 4,
            vertical: true,
            // slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
            // centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        vertical: false
                    }
                }]
        });




    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>
</body>

</html>