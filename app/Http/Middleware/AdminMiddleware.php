<?php

namespace App\Http\Middleware;

use App\User;
use Barryvdh\Reflection\DocBlock\Location;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        if (Auth::user()->getAttribute('is_admin') == true) {
            return $next($request);
        }

       return abort(403, 'Unauthorized action.');
    }
}





















//$admin = \DB::table('users')->get(['name','email'])->where('is_admin',true);
//if(Auth::user()->id === $admin){
//  dd($admin);
//}
//$user = User::all()->toArray();
//dd($user);
//$admin = User::query()->where('is_admin',true,true);
//dd($admin);
//dd(Auth::user());
//where('is_admin',true)
//if (Auth::user()->){
//dd(Auth::user()->getAttribute('is_admin'));
//  return view('admin');
//return redirect('/');
