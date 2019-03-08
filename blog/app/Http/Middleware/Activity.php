<?php namespace App\http\Middleware;

use Closure;

class Activity{
    public function handle($request,Closure $next){
        if(time()<strtotime('2019-03-25')){
            return redirect('activity0');
        }
        return $next($request);
    }
}