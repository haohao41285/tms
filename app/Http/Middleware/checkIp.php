<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;
use Illuminate\Http\Request;

class checkIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (null != $request->session()->get('locale')){
            App::setLocale($request->session()->get('locale'));
            return $next($request);
        }
        try{
            $requestTimeZone = file_get_contents('http://ip-api.com/json');
            if (isset($requestTimeZone) && json_decode($requestTimeZone, 1)['timezone'] == 'Asia/Ho_Chi_Minh') {
                $locale = 'vi';
            } else $locale = 'en';
        } catch(\Exception $e) {
            $locale = 'en';
        }
        App::setLocale($locale);
        $request->session()->put('locale', $locale);

        return $next($request);
    }
}
