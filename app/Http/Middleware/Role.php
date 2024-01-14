<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     * @param Request $request
     * @param  Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if($request->user()->roles()->where('name','=',$role)->exists())
        {
            return $next($request);
        }
        return redirect()->back()->with('error', 'You do not have sufficient privilege for this item.');
//        abort(403);
    }
}
