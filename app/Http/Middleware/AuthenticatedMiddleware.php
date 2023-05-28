<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticatedMiddleware
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
        if (Session::has('user_id')) {
            // 用户已登录，继续请求
            return $next($request);
        }
        // if (Auth::check()) {
        //     // 用户已登录，继续请求
        //     return $next($request);
        // }

        // 用户未登录，重定向到登录页面或返回错误响应
        return redirect('/Login');
      
    }
}
