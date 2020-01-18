<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index()
    {   
        // return \DB::table('users')->get();

        $value = Cache::remember('user', Carbon::now()->addMinutes(5) , function () {

            return \DB::table('users')->get();

        });
 
        return $value;
    }

    public function cache()
    {
        return Cache::get('user');
    }

}
