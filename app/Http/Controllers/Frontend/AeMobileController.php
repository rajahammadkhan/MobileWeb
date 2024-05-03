<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Mobile;
use App\Models\MobileReview;
use App\Models\MobileBrand;
use Illuminate\Http\Request;

class AeMobileController extends Controller
{
   public function Collection()
    {
        $mobiles = Mobile::get();
        $brands = MobileBrand::latest()->limit(6)->get();
        return view('frontend/collection',compact('brands','mobiles'));
    }

    public function Detail($slug)
    {
        $mobile = Mobile::with('mediaImages')->where('slug',$slug)->first();
        $reviews = MobileReview::where('mobile_id',$mobile->id)->get();
        return view('frontend/pdp',compact('mobile','reviews'));
    }
    
    public function advancedCollection(Request $request)
    {
          $mobiles = Mobile::where('mobiles.u_id', '!=', null)
                    ->when(isset($request->brand_id), function ($query) use ($request) {
                            $query->where('mobiles.brand_id', $request->brand_id);
                        })
                    ->when(isset($request->capacity), function ($query) use ($request) {
                        $query->whereHas('battery', function ($subquery) use ($request) {
                            $subquery->where('capacity', $request->capacity);
                        });
                    })
                    ->when(isset($request->colors), function ($query) use ($request) {
                        $colors = json_decode($request->colors);
                        $query->whereHas('body', function ($subquery) use ($colors) {
                            $subquery->whereIn('color', $colors);
                        });
                    })
                    ->when(isset($request->weight), function ($query) use ($request) {
                        $query->whereHas('body', function ($subquery) use ($request) {
                            $subquery->where('weight', $request->weight);
                        });
                    })
                    ->when(isset($request->type_id), function ($query) use ($request) {
                        $query->whereHas('camera', function ($subquery) use ($request) {
                            $subquery->where('type_id', $request->type_id);
                        });
                    })
                    ->when(isset($request->usb), function ($query) use ($request) {
                        $query->whereHas('network', function ($subquery) use ($request) {
                            $subquery->where('usb', $request->usb);
                        });
                    })
                    ->when(isset($request->size), function ($query) use ($request) {
                        $query->whereHas('general', function ($subquery) use ($request) {
                            $subquery->where('size', $request->size);
                        });
                    })
                    ->when(isset($request->built_in_memory_1), function ($query) use ($request) {
                        $query->whereHas('memory', function ($subquery) use ($request) {
                            $subquery->where('built_in_memory_1', $request->built_in_memory_1);
                        });
                    })
                    ->when(isset($request->built_in_memory_2), function ($query) use ($request) {
                        $query->whereHas('memory', function ($subquery) use ($request) {
                            $subquery->where('built_in_memory_2', $request->built_in_memory_2);
                        });
                    })
                    ->when(isset($request->price_mini) && isset($request->price_max), function ($query) use ($request) {
                        $query->whereBetween('mobiles.price_usd', [$request->price_mini, $request->price_max]);
                    })
                    ->distinct()
                    ->get();
        $brands = MobileBrand::latest()->limit(6)->get();
        return view('frontend/collection',compact('brands','mobiles'));
    }
    
    
}
