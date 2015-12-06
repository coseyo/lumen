<?php

namespace App\Http\Controllers;

use DB;
//use App\Http\Middleware\LoginMiddleware as LoginMiddleware;
use Laravel\Lumen\Routing\Controller as BaseController;

class TestController extends BaseController
{

    public function __construct()
    {
//        \App::bind('App\Http\Middleware\LoginMiddleware', 'App\Http\Middleware\LoginMiddleware');
//        \App::alias('App\Http\Middleware\LoginMiddleware', 'login');
        $this->middleware('login');
//        $this->middleware('auth');
    }

    public function hello()
    {
        echo 'hello world lumenxxsdf';
    }

    public function data_orm()
    {
        $userid_arr = array(55000111, 111, 1235, 198184915, 55000111, 111, 55000111);
        $data = array();
        foreach ($userid_arr as $userid) {
            $data[] = DB::table('coupon_users')->where('userid', $userid)->limit(50)->get();
        }
        echo json_encode($data);
    }
}