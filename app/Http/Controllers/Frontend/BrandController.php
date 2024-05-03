<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Mobile;
use App\Models\MobileBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  
    public function brandDetail($slug)
    {
         $mobiles = Mobile::whereHas('brand', function ($subquery) use ($slug) {
                        $subquery->where('slug', $slug);
                    })
                    ->distinct()
                    ->get();
        $brands = MobileBrand::latest()->limit(6)->get();
        return view('frontend/collection',compact('brands','mobiles'));
    }

    public function mobileBrandCollection(Request $request, $slug)
    {
        $mobileName = $request->input('mobile_name');
    
        $mobiles = Mobile::whereHas('brand', function ($subquery) use ($slug) {
                $subquery->where('slug', $slug);
            })
            ->when($mobileName, function ($query) use ($mobileName) {
                $query->where('name', 'like', '%' . $mobileName . '%');
            })
            ->distinct()
            ->get();
    
        $brands = MobileBrand::latest()->limit(6)->get();
    
        return view('frontend/collection', compact('brands', 'mobiles'));
    }

}
