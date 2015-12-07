<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
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
