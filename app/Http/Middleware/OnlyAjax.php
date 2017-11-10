<?php

namespace App\Http\Middleware;

use Closure;

class OnlyAjax
{
    public function handle($request, Closure $next)
    {
      if( ! $request->ajax())
      {
        return redirect('/');
      }
        return $next($request);
    }
}
