@extends('management.layouts.master')
@section('title')
    Blog Create - {{ config('app.dashboard') }}
@endsection
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
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Blog</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Blog Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('name') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Short Description </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('short_description') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="short_description" placeholder="Short Description">
                                            </div>
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
                                </div>
                            </div>
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Meta Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{old('meta_title') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="meta_title"
                                                       placeholder="Meta Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Meta Description </strong></label>
                                            <textarea value="{{old('meta_description') }}" type="text"
                                                      name="meta_description"
                                                      id="erp_order_message" class="ckeditor form-control choices"
                                                      cols="30"
                                                      rows="10"
                                            ></textarea>
                                        </div>
                                    </div>

                                    <div class="row my-4">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Meta Keywords </strong></label>

                                            <div class="form-line">
                                                <input value="{{old('meta_keywords')}}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="meta_keywords"
                                                       placeholder="Meta Keywords">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-1">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Status </strong></label>
                                            <select class="form-control select2" name="status" id="Quiz-type"
                                                    data-placeholder="Select">
                                                <option selected value="1">Publish
                                                </option>
                                                <option value="0">Draft
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-3"><strong>Media Gallery</strong></label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="main_container m-3">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <div class="drag-icon-cph">
                                                                <i class="material-icons" style="font-size: 35px">touch_app</i>
                                                            </div>
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="blog_image" accept=".jpg,.gif,.png,.webp"
                                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                                    <div class="img-thumb">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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