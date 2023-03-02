<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Cookie;

class Webpanel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if(Auth::check()){
            return $next($request);
        }
        // if(Cookie::get('admin')){
        //     $user = User::find(json_decode(Cookie::get('admin'),true)['id']);
        //     Auth::loginUsingId($user->id);
        //     return $next($request);
        // }
        return redirect('/webpanel/authen');
    }
}
