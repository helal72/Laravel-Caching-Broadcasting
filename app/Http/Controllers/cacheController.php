<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

class cacheController extends Controller
{
    public function index(){

        $value = Cache::remember('user', Carbon::now()->addMinutes(5), function () {
            return \DB::table('users')->get();
        });

        return $value;
    }

    public function cache(){
        return Cache::get('user');
    }
}
