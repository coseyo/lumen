<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Blade;
use Laravel\Lumen\Routing\Controller as BaseController;

class LayoutController extends BaseController
{
    public function __construct()
    {
        $this->_initBlade();
    }

    private function _initBlade()
    {
        Blade::setContentTags('<%', '%>');
        Blade::setEscapedContentTags('<%%', '%%>');
    }
}
