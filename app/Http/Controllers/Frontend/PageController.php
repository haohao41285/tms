<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class PageController extends Controller
{
    public function home(){
        $data['active'] = 'home';
        return view('fe.pages.home', $data);
    }

    public function aboutUs(){
        $data['active'] = 'about-us';
        return view('fe.pages.about-us', $data);
    }
    
    public function contactUs(){
        $data['active'] = 'contact-us';
        return view('fe.pages.contact-us', $data);
    }
    
    public function contactUsPost(ContactRequest $request){
        dd($request->all());
    }
    
    public function qa(){
        $data['active'] = 'qa';
        return view('fe.pages.qa', $data);
    }
}
