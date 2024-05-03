<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Mobile;
use App\Models\MobileBrand;
use App\Models\MobileReview;
use App\Models\MobileBattery;
use App\Models\MobileBody;
use App\Models\MobileCam;
use App\Models\MobileGeneralInfo;
use App\Models\MobileMemory;
use App\Models\MobileNetwork;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $coming_mobiles = Mobile::orderBy('created_at', 'asc')->take(10)->get();
        $latest_mobiles = Mobile::orderBy('created_at', 'desc')->take(25)->get();
        $brands = MobileBrand::withCount('mobiles')->take(12)->get();
        return view('frontend/index',compact('brands','coming_mobiles','latest_mobiles'));
    }
    
     public function Brand()
    {
        $brands = MobileBrand::withCount('mobiles')->get();
        return view('frontend/brand',compact('brands'));
    }
    
    public function Privacy()
    {
        return view('frontend/privacy');
    }
    public function advancedSearch()
    {
        $mobilesmini = Mobile::orderBy('price_usd')->get();
        $mobilesmax = Mobile::orderByDesc('price_usd')->get();
        $brands = MobileBrand::get();
        $generals = MobileGeneralInfo::get();
        $bodys = MobileBody::get();
        $batterys = MobileBattery::get();
        $networks = MobileNetwork::get();
        $memorys = MobileMemory::get();
        $generalsdata = MobileGeneralInfo::latest()->distinct()->limit(4)->get();
        return view('frontend/advanced_search',compact('mobilesmini','mobilesmax','brands','generals','bodys','batterys','networks','memorys','generalsdata'));
    }
    
     public function getCollection(Request $request)
    {
     $mobiles = Mobile::where('mobiles.u_id', '!=', null)
                ->when(isset($request->brand_id), function ($query) use ($request) {
                    $query->whereIn('mobiles.brand_id', $request->brand_id);
                })
                ->when(isset($request->mobile_price), function ($query) use ($request) {
                    $query->where(function ($subquery) use ($request) {
                        foreach ($request->mobile_price as $priceRange) {
                            list($minPrice, $maxPrice) = explode('-', $priceRange);
                            $subquery->orWhereBetween('mobiles.price_usd', [$minPrice, $maxPrice]);
                        }
                    });
                })
                ->when(isset($request->mobile_ram), function ($query) use ($request) {
                    $query->whereHas('memory', function ($subquery) use ($request) {
                        $subquery->whereIn('ram_1', $request->mobile_ram)
                            ->orWhereIn('ram_2', $request->mobile_ram);
                    });
                })
                ->when(isset($request->mobile_rom), function ($query) use ($request) {
                    $query->whereHas('memory', function ($subquery) use ($request) {
                        $subquery->whereIn('built_in_memory_1', $request->mobile_rom)
                            ->orWhereIn('built_in_memory_2', $request->mobile_rom);
                    });
                })
                ->when(isset($request->mobile_camera), function ($query) use ($request) {
                    $query->whereHas('camera', function ($subquery) use ($request) {
                        $subquery->where(function ($orSubquery) use ($request) {
                            foreach ($request->mobile_camera as $cameraRange) {
                                list($minSize, $maxSize) = array_map('intval', explode('-', $cameraRange));
                                $orSubquery->orWhereBetween('cam_size', [$minSize, $maxSize]);
                            }
                        });
                    });
                })
                ->with(['camera' => function ($query) {
                    $query->select('mobile_id', 'cam_size');
                }])
                ->when(isset($request->mobile_os), function ($query) use ($request) {
                    $query->whereHas('general', function ($subquery) use ($request) {
                        $subquery->where(function ($orSubquery) use ($request) {
                            foreach ($request->mobile_os as $os) {
                                $orSubquery->orWhere('os', 'LIKE', '%' . $os . '%');
                            }
                        });
                    });
                })
                ->when(isset($request->mobile_sim), function ($query) use ($request) {
                    $query->whereHas('body', function ($subquery) use ($request) {
                        $subquery->whereIn('no_of_sim', $request->mobile_sim);
                    });
                })
                ->distinct()
                ->get();
            return view('frontend/snippets/mobile',compact('mobiles'));
    }

}
