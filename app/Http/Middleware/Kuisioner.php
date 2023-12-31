<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Kuisioner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $userRoles = $user->getRoleNames();
        $currentRoute = $request->route()->getName();
        if($userRoles[0] == "user"){
            if(preg_match('/^user\.kuisioner.*/', $currentRoute) && $user->courseType == null){
                return $next($request);
            } elseif(preg_match('/^user\.kuisioner.*/', $currentRoute) && $user->courseType != null){
                return redirect()->route('dashboard')->with('message', 'You have already filled out the form');
            } elseif($user->courseType == null){
                return redirect()->route('user.kuisionerSessionOne');
            }
            return $next($request);
        }

        return redirect()->back();
    }
}
