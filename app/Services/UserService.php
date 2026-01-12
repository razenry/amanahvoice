<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $userRepository
    ) {}

    public function getUsers()
    {
        return $this->userRepository->getAll();
    }

    public function storeUser(array $data)
    {
        // contoh business logic
        $data['password'] = bcrypt($data['password']);

        return $this->userRepository->create($data);
    }
}
