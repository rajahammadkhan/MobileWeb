<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\MobileReview;

class ContactUsController extends Controller
{
    public function Contact()
    {
        return view('frontend/contact');
    }

    public function store(Request $request)
    {
        $contact    =   new Contact;
        $contact->name    =   $request->name;
        $contact->email    =   $request->email;
        $contact->subject      =   $request->subject;
        $contact->message      =   $request->message;
        $contact->save();
        $success = true;
        return response()->json(['success' => $success]);
    }

    public function Review(Request $request)
    {
        $review    =   new MobileReview;
        $review->mobile_id    =   $request->mobile_id;
        $review->name      =   $request->name;
        $review->email      =   $request->email;
        $review->star      =   $request->rating;
        $review->feedback      =   $request->feedback;
        $review->save();
        $success = true;
        return response()->json(['success' => $success]);
    }
}
