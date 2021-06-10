<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
//        dd('dssss');
        if ($request->is('api/*')) {
            throw new HttpResponseException(response()->json(['failure_reason' => 'Token invalid'], 401));
        }
//dd();
//        if (! $request->expectsJson()) {
//            return route('signin');
//        }


    }
}
