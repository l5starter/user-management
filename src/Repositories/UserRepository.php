<?php

namespace L5Starter\UserManagement\Repositories;

use App\User;
use L5Starter\Core\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    public function create(array $data)
    {
        return $this->model->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
