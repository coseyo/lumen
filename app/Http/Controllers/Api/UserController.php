<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Http\Controllers\ApiController as ApiController;
use App\Domain\Repositories\UserRepository as UserRepository;
use Illuminate\Http\Request;

class UserController extends ApiController
{

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function getData(Request $request)
    {

        $v = Validator::make($request->all(), [
            'userid' => 'required|integer',
            'limit' => 'required|integer',
        ]);

        if ($v->fails()) {
            echo $v->errors();
            return;
        }

        $params = $v->valid();

        $data = $this->user->getUserData($params['userid'], $params['limit']);

        var_dump($data);
        return;
    }
}