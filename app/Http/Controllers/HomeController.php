<?php

namespace App\Http\Controllers;
use App\Models\Mobile;
use App\Models\MobileBrand;
use App\Models\MobileCategory;
use App\Models\Contact;
use App\Models\MobileReview;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['mobile']=Mobile::get();
        $data['category']=MobileCategory::get();
        $data['brand']=MobileBrand::get();
        $data['contacts']=Contact::latest()->take(8)->get();
        $data['reviews']=MobileReview::where('reviews_status',1)->latest()->take(8)->get();
        return view('management/dashboard/index',$data);
    }
}
