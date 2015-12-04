<?php

namespace App\Domain\Models;

use DB;
use App\Domain\Parents\BaseModel as BaseModel;

class UserModel extends BaseModel
{
    public function getUserData($userid, $limit)
    {
        $data = DB::table('coupon_users')->where('userid', $userid)->limit($limit)->get();
        return $data->toArray();
    }
}