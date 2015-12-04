<?php

namespace App\Http\Controllers;

use DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class TestController extends BaseController
{
    public function hello()
    {
        echo 'hello world lumenxx';
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