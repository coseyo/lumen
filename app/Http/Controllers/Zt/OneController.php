<?php

namespace App\Http\Controllers\Zt;

use DB;
use App\Http\Controllers\LayoutController as LayoutController;

class OneController extends LayoutController
{
    public function hello()
    {
        echo 'hello world lumenxx';
    }

    public function data_orm()
    {
        $data = DB::table('coupon_users')->where('userid', 55000111)->limit(10)->get();
//        return view('index.index');
        return view('index.index', array(
            'arr' => $data,
            'test' => 'I am test var'
        ));
    }
}