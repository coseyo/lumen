<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\ApiController;
use App\Domain\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends ApiController
{

    public function __construct(UserRepository $user)
    {
//        $this->middleware('login');
        $this->user = $user;
    }

    public function service(Request $request, $name)
    {
//        dd($name);
        $str = \App::make(ns_service('user'))->saveMe($name);
        return $this->responseJson('ok', $str);
    }

    public function getData(Request $request)
    {
        // get model's public var
        var_dump($this->user->config);

        // make use
        $name = \App::make('App\Domain\Service\UserService')->myName('is');
        var_dump($name);

        $v = Validator::make($request->all(), [
            'userid' => 'required|integer',
            'limit' => 'required|integer',
        ]);

        if ($v->fails()) {
            echo $v->errors();
            return;
        }

        $params = $v->valid();

        // invoke models's method
        $data = $this->user->getUserData($params['userid'], $params['limit']);

        return $this->responseJson('ok', $data);
    }
}