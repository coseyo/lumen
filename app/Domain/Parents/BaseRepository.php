<?php

namespace App\Domain\Parents;

abstract class BaseRepository
{
    public $model;

    public function __call($method, $args)
    {
        if (method_exists($this->model, $method)) {
            return call_user_func_array([$this->model, $method], $args);
        }
        return null;
    }
}