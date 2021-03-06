<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_name=session('user_name');
        if(empty($user_name)){
            echo "请先登录";
            return redirect('login');
        }
        return $next($request);
    }
}
