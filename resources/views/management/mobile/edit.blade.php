@extends('management.layouts.master')
@section('title')
      Mobile Edit - {{ config('app.dashboard') }}
@endsection
@section('content')
<style>
    #upload {
        opacity: 0;
    }
    #upload-label {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }
    .image-area {
        border: 2px dashed rgba(255, 255, 255, 0.7);
        padding: 1rem;
        position: relative;
    }
    .image-area::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }
    .image-area img {
        z-index: 2;
        position: relative;
    }
    body {
        min-height: 100vh;
    }
</style>
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
                @include('management/mobile/mobile-data',['mobile' => $mobile])
                @livewire('youtube-links', ['mobile' => $mobile->id])
                @livewire('mobile-battery-info', ['mobile' => $mobile->id])
                @livewire('mobile-body-info', ['mobile' => $mobile->id])
                @livewire('mobile-cam-info', ['mobile' => $mobile->id])
                @livewire('mobile-general', ['mobile' => $mobile->id])
                @livewire('mobile-memory-info', ['mobile' => $mobile->id])   
                @livewire('mobile-network-info', ['mobile' => $mobile->id])    
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });
    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );
    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
</script>
@endsection

