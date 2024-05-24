<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class RestrictAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $url = $request->url();
        $parts = explode("/", $url);
        $lastPart = end($parts);
        $userType = isset($_COOKIE['typeofuser']) ? $_COOKIE['typeofuser'] : null;

        $memberRoutes = ['addmember', 'view-member', 'delivery-details', 'depository_details', 'challan', 'become-member','user-register','user-login','forgot-password','login','otp-verify'];
        $volunteerRoutes = ['volunteer-profile', 'change', 'volunteer', 'renewal','billing-details','user-register','user-login','forgot-password','login','otp-verify'];
        $generalRoutes = ['addmember','view-member','delivery-details','depository_details','challan','volunteer-profile','change','renewal','user-register','user-login','forgot-password','login','otp-verify'];

        if ($userType == 'volunteer' && in_array($lastPart, $volunteerRoutes)) {
            return redirect('/wasted')->with('error', 'This access is resctricted for you..!');
            
        }

        if ($userType == 'member' && in_array($lastPart, $memberRoutes)) {
            return redirect('/wasted')->with('error', 'This access is resctricted for you..!');
        }

        if ($userType == 'general-user' && in_array($lastPart, $generalRoutes)) {
            return redirect('/wasted')->with('error', 'This access is resctricted for you..!');
        }

        return $next($request);
    }
}
