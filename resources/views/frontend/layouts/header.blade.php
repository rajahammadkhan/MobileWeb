<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Axe Mobile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="highest quality specialty coffee beans.">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/324353ac19.js" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
                            <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
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
