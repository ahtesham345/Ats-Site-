<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function uiux(){
        return view('frontend.services.uiux');
    }
    public function websitedevelopment(){
        return view('frontend.services.websitedevelopment');
    }
    public function ecommerce(){
        return view('frontend.services.ecommerce');
    }
    public function customsoftwaredevelopment(){
        return view('frontend.services.customsoftwaredevelopment');
    }
    public function dataScience(){
        return view('frontend.services.dataScience');
    }
    public function mobileAppDevelopment(){
        return view('frontend.services.mobileAppDevelopment');
    }
    public function graphicDesigning(){
        return view('frontend.services.graphicDesigning');
    }
    public function SLA(){
        return view('frontend.services.SLA');
    }
    public function contentWriting(){
        return view('frontend.services.contentWriting');
    }
    public function career(){
        return view('frontend.career');
    }
    public function blog(){
        return view('frontend.blog.blog');
    }
    public function blogPost1(){
        return view('frontend.blog.blogPost1');
    }
    public function aboutUs(){
        return view('frontend.aboutUs');
    }
    public function contactUs(){
        return view('frontend.contactUs');
    }
    public function faqs(){
        return view('frontend.faqs');
    }
    public function appointment(){
        return view('frontend.appointment');
    }


}
