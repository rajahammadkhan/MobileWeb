@if(count($mobiles)>0)
@foreach($mobiles as $mobile)
<div class="col-lg-3 col-md-4 col-sm-6 col-6">
    <div class="card product-card">
        <div class="card-body">
            @php
            $featuredMedia = $mobile->getFirstFeaturedMedia();
            @endphp
            @if ($featuredMedia)
            <a href="{{url('mobile',$mobile->slug)}}"><img src="{{ asset('media/mobile/' . $featuredMedia->unique_name) }}" alt=""></a>
            @else
            <a href="{{url('mobile',$mobile->slug)}}"><img src="{{ asset('media/mobile/imagenotfound.jpg') }}" alt=""></a>
            @endif
            <h6 class="brand-title">{{$mobile->brand->name ?? ''}}</h6>
            <h6 class="product-title">{{$mobile->name ?? ''}}</h6>
            <div class="product-price d-flex justify-content-between">
                <p>Rs: {{number_format($mobile->price_pkr ?? '')}}</p>
                <p>USD: ${{number_format($mobile->price_usd ?? '')}}</p>
            </div>
            <div class="rating">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                    <path d="M7.70756 0.199951L9.34132 5.39958H14.6283L10.351 8.61312L11.9848 13.8127L7.70756 10.5992L3.43031 13.8127L5.06407 8.61312L0.78682 5.39958H6.07379L7.70756 0.199951Z" fill="#FFA41C" fill-opacity="0.7"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                    <path d="M7.70756 0.199951L9.34132 5.39958H14.6283L10.351 8.61312L11.9848 13.8127L7.70756 10.5992L3.43031 13.8127L5.06407 8.61312L0.78682 5.39958H6.07379L7.70756 0.199951Z" fill="#FFA41C" fill-opacity="0.7"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                    <path d="M7.70756 0.199951L9.34132 5.39958H14.6283L10.351 8.61312L11.9848 13.8127L7.70756 10.5992L3.43031 13.8127L5.06407 8.61312L0.78682 5.39958H6.07379L7.70756 0.199951Z" fill="#FFA41C" fill-opacity="0.7"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                    <path d="M7.70756 0.199951L9.34132 5.39958H14.6283L10.351 8.61312L11.9848 13.8127L7.70756 10.5992L3.43031 13.8127L5.06407 8.61312L0.78682 5.39958H6.07379L7.70756 0.199951Z" fill="#FFA41C" fill-opacity="0.7"/>
                </svg>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<p>No mobiles found.</p>
@endif