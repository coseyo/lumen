<?php

namespace App\Domain\Service;

class UserService
{
    public function myName($is)
    {
        return $is . ' coseyo';
    }

    public function saveMe($name)
    {
        $str = help_me($name);
        $str .= ' ' . \App::make('libone')->beat_me($name);
        return $str;
    }
}