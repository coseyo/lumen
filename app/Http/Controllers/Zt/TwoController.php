<?php

namespace App\Http\Controllers\Zt;

use DB;
use App\Http\Controllers\Controller as BaseController;

class TwoController extends BaseController
{
    public function hello()
    {
        echo 'hello world two';
    }
}