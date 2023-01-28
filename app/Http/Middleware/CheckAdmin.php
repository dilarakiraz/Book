<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;

class CheckAdmin
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
        $userRoles=Auth::user()->roles->pluck('name'); //Authenticateden rollerden bu usera ait name ları çeker.Rolleri diziye atar
        //dd($userRoles);//ana sayfada kontrol
        If(!$userRoles->contains('admin')){ //Dizilerden birisi admin içerir mi kontrol ediyor.
            return redirect(route('admin_login'))->with('error','Yetkiniz Yok!'); //admin değilse logine gönder.
        }
        return $next($request); //adminse yönlendir

    }
}
