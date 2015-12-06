<?php

namespace App\Domain\Abstracts\Classes;

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

    public function __get($name)
    {
        if (isset($this->model->{$name})) {
            return $this->model->{$name};
        }
        return null;
    }
}