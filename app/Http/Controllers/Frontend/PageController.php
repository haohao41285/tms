<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

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
        $data = $request->all();
        $email = $data['email'];

        if ($data['subject'] == 1) $data['subject'] = 'Contact - Design Website';
        elseif ($data['subject'] == 2) $data['subject'] = 'Contact - Advertising';
        else $data['subject'] = 'Contact - Other';
        
        Mail::to($email)->send(new Contact($data));
        return back()->with('success', 'Thanks for contact us');
        
    }
    
    public function qa(){
        $data['active'] = 'qa';
        return view('fe.pages.qa', $data);
    }
}
