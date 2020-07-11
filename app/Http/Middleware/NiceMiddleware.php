<?php

namespace App\Http\Middleware;

use Closure;

class NiceMiddleware
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
        $data = [
          ['name' => 'taro', 'email' => 'taro@gmail.com'],
          ['name' => 'jiro', 'email' => 'jiro@gmail.com'],
          ['name' => 'saburo', 'email' => 'saburo@gmail.com'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
