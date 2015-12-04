<?php

namespace App\Domain\Repositories;

use App\Domain\Parents\BaseRepository as BaseRepository;
use App\Domain\Models\UserModel as UserModel;

class UserRepository extends BaseRepository
{
    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }
}