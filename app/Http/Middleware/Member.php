<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\customer;
use Cookie;

class Member
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        // if(Cookie::get('member')){
        //     $user = customer::find(json_decode(Cookie::get('member'),true)['cus_id']);
        //     Auth::guard('member')->loginUsingId($user->cus_id);
        //     return $next($request);
        // }
        if(Auth::guard('member')->check()){
            if(Auth::guard('member')->user()->active == 'off'){
                return redirect('/user-logout');
            }
            return $next($request);
        }
        return redirect('/user-login');
    }
}
