<style type="text/css">
.p_class {
     margin: 0;
}
 .upload__box {
     padding: 40px;
}
 .upload__inputfile {
     width: 0.1px;
     height: 0.1px;
     opacity: 0;
     overflow: hidden;
     position: absolute;
     z-index: -1;
}
 .upload__btn {
     display: inline-block;
     font-weight: 600;
     color: #fff;
     text-align: center;
     min-width: 116px;
     padding: 5px;
     transition: all 0.3s ease;
     cursor: pointer;
     border: 2px solid;
     background-color: #4045ba;
     border-color: #4045ba;
     border-radius: 10px;
     line-height: 26px;
     font-size: 14px;
}
 .upload__btn:hover {
     background-color: unset;
     color: #4045ba;
     transition: all 0.3s ease;
}
 .upload__btn-box {
     margin-bottom: 10px;
}
 .upload__img-wrap {
     display: flex;
     flex-wrap: wrap;
     margin: 0 -10px;
}
 .upload__img-box {
     width: 200px;
     padding: 0 10px;
     margin-bottom: 12px;
      box-sizing: border-box;
}
 .upload__img-close {
     width: 24px;
     height: 24px;
     border-radius: 50%;
     background-color: rgba(0, 0, 0, 0.5);
     position: absolute;
     top: 10px;
     right: 10px;
     text-align: center;
     line-height: 24px;
     z-index: 1;
     cursor: pointer;
}
 .upload__img-close:after {
     content: '\2716';
     font-size: 14px;
     color: white;
}
 .img-bg {
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
     position: relative;
     padding-bottom: 100%;
}
 


</style>
<form action="{{route('mobiles.update',$mobile->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="card py-4">
                <div class="header">
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Name </strong></label>
                            <div class="form-line">
                                <input value="{{ $mobile->name ?? ''}}" type="text" id="erp_question_text"
                                       class="form-control" name="name" placeholder="Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Price PKR </strong></label>
                            <div class="form-line">
                                <input value="{{ $mobile->price_pkr ?? '' }}" type="number" id="erp_question_text"
                                       class="form-control" name="price_pkr" placeholder="Mobile Price PKR">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Mobile Price USD </strong></label>
                            <div class="form-line">
                                <input value="{{ $mobile->price_usd ?? '' }}" type="number" id="erp_question_text"
                                       class="form-control" name="price_usd" placeholder="Mobile Price USD">
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class=" col-12">
                            <label for="email_address1">   <strong> Short Description </strong></label>
                            <textarea value="{{ $mobile->short_description ?? '' }}" type="text" name="short_description"
                                      id="short_description"  class="ckeditor form-control choices" cols="30"
                                      rows="10"
                            >{{$mobile->short_description ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class=" col-12">
                            <label for="email_address1">   <strong> Long Description </strong></label>
                            <textarea value="{{ $mobile->short_description ?? '' }}" type="text" name="long_description"
                                      id="long_description"  class="ckeditor form-control choices" cols="30"
                                      rows="10"
                            >{{$mobile->long_description ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="row my-2">
                       <div class="upload__box">
                          <div class="upload__btn-box">
                            <label class="upload__btn">
                              <p class="p_class">Upload images</p>
                              <input type="file" name="images[]" multiple data-max_length="20" class="upload__inputfile">
                            </label>
                          </div>
                         <div class="upload__img-wrap">
                            @if(isset($mobile->mediaImages) && count($mobile->mediaImages) > 0)
                                @foreach($mobile->mediaImages as $image)
                                    @if($mobile->getFirstFeaturedMedia()->unique_name != $image->unique_name)
                                    <div class='upload__img-box'>
                                        <div style='background-image: url("{{ asset('media/mobile/' . $image->unique_name) }}")' class='img-bg'>
                                            <div class='upload__img-close' data-id="{{$image->id}}"></div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        </div>
                    </div>



















                     <!-- <div class="row my-2">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Multiple Images </strong></label>
                            <input type="file" 
                               class="filepond"
                               name="filepond[]" 
                               multiple > -->

                            <!-- <input type="file" class="filepond" name="filepond[]" multiple>   -->
                            <!-- {{-- <input type="file" name="filepond[]" multiple>      --}} -->
                       <!--  </div>
                    </div> -->
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class=" col-12">
                            <label for="email_address1"><strong>Mobile Brand</strong> </label>
                            <select class="form-control select2" name="brand_id" id="Quiz-type"
                                    data-placeholder="Select" required>
                                     <option value="" selected> select</option>
                                     @if(isset($mobile_brand)) 
                                     @foreach ($mobile_brand as $brand)
                                    <option {{ $brand->id == $mobile['brand_id'] ? 'Selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                     @endif
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class=" col-12">
                            <label for="email_address1"><strong>Mobile Category</strong></label>
                            <select class="form-control select2" name="category_id" id="Quiz-type"
                                    data-placeholder="Select" required>
                                <option selected> select</option>
                                @if(isset($mobile_category))
                                    @foreach ($mobile_category as $category)
                                        <option {{ $category->id == $mobile->category_id ? 'Selected' : '' }} value={{ $category->id }}>{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class=" col-12">
                            <label for="email_address1"><strong>Mobile Status</strong></label>
                            <select class="form-control select2" name="status_id" id="Quiz-type"
                                    data-placeholder="Select" required>
                                <option selected> select</option>
                                @if(isset($mobile_status))
                                    @foreach ($mobile_status as $status)
                                        <option {{ $status->id == $mobile->status_id ? 'Selected' : '' }} value={{ $status->id }}>{{ $status->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class=" col-12">
                            <label for="email_address1"><strong>Mobile Operating System</strong></label>
                            <select class="form-control select2" name="operating_system_id" id="Quiz-type"
                                    data-placeholder="Select" required>
                                <option selected> select</option>
                                @if(isset($operating_system))
                                    @foreach ($operating_system as $system)
                                        <option {{ $system->id == $mobile->operating_system_id ? 'Selected' : '' }} value={{ $system->id }}>{{ $system->name }}</option>
                                    @endforeach
                                @endif
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
                                    <input type="file" name="mobile_image" accept=".jpg,.gif,.png,.webp"
                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                    <div class="img-thumb">
                                        @if($mobile->getFirstFeaturedMedia() == null)
                                        @else
                                        @php
                                            $featuredMedia = $mobile->getFirstFeaturedMedia();
                                        @endphp
                                        <img class="main_img d-block w-100 h-100 position-absolute" src="{{ asset('media/mobile/' . $featuredMedia->unique_name) }}" alt="">
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
</form>

<script>
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArrays = {};  // Use an object to store arrays for each file input

  $('.upload__inputfile').each(function () {
    var inputId = $(this).attr('id');
    imgArrays[inputId] = [];  // Initialize an array for each file input

    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = 20;  // Set your own maximum length dynamically if needed

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);

      filesArr.forEach(function (f) {
        if (!f.type.match('image.*')) {
          return;
        }

        var currentArray = imgArrays[inputId];
        if (currentArray.length >= maxLength) {
          return false;
        } else {
          currentArray.push(f);

          var reader = new FileReader();
          reader.onload = function (e) {
            var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
            imgWrap.append(html);
          };
          reader.readAsDataURL(f);
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    var inputId = $(this).closest('.upload__box').find('.upload__inputfile').attr('id');

    var currentArray = imgArrays[inputId];
    for (var i = 0; i < currentArray.length; i++) {
      if (currentArray[i].name === file) {
        currentArray.splice(i, 1);
        break;
      }
    }

    $(this).parent().parent().remove();
  });
}


$(document).ready(function () {
        $(document).on('click', '.upload__img-close', function () {
            var likeaction = $(this).data('id');
            var actionperformer = $(this);
            $.ajax({
                type: 'POST',
                url: "{{url('image-delete')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: likeaction,
                },
                dataType: "json",
                beforeSend: function () {
                    $(".ajaxpreload").show();
                },
                success: function (data) {
                    if(data){
                        $(actionperformer).parents('.upload__img-wrap').find('.img-bg').remove()
                    }
                }
            });
    });
});
</script>
