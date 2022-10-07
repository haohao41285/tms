<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Facades\App;

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

    /**
     * Change locale, then redirect back
     * @locale: vi/en
     * @return back()
     */
    public function redirectLocale($locale, Request $request) {
        App::setLocale($locale);
        $request->session()->put('locale', $locale);
        $link = $request->utm;
        return redirect()->route($link);
    }
}
