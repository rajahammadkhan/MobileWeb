
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('management/images/load.png')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('management/css/app.min.css')}}" rel="stylesheet">
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('management/css/styles/all-themes.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{asset('management/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('management/css/form.min.css')}}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link rel="stylesheet"  href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @livewireStyles
</head>
<style>
    .fw-900{
        font-weight: 900 !important;
    }
    .text-signature {
        color: #E8BC50;
    }
    .bg-signature {
        background: #E8BC50;
    }
</style>
<body class="light">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="{{asset('management/images/preloading.png')}}" width="20" height="20" alt="admin">
        </div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay"></div>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="index-2.html">
                <!-- <img src="{{asset('management/images/usrbig.jpg')}}" alt="{{config('app.dashboard')}}" /> -->
                <span class="logo-name">AeMobile</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="pull-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i class="material-icons">reorder</i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </a>
                </li>
                <li class="dropdown user_profile">
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>


