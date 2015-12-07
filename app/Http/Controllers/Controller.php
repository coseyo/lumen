<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // 标准化json输出
    public function responseJson($result, $data = [], $msg = null)
    {
        return response()->json(['result' => $result, 'data' => $data, 'msg' => $msg]);
    }
}
