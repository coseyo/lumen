<?php

namespace App\Domain\Models;

use DB;
use App\Domain\Abstracts\Classes\BaseModel as BaseModel;

class UserModel extends BaseModel
{
    public $config = 'config';

    public function getUserData($userid, $limit)
    {
        $data = DB::table('coupon_users')->where('userid', $userid)->limit($limit)->get();
        return $data;
    }
}