<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TrafficLogger
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

        /*
           var_dump(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1));
           var_dump($request->server('HTTP_X_FORWARDED_FOR'));
           var_dump($request->server('REMOTE_ADDR'));
           var_dump($request->userAgent());
           var_dump(gethostname());
         */

        return $next($request);
    }
}
