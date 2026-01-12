<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function getAll(): Collection
    {
        return User::latest()->get();
    }

    public function create(array $data)
    {
        return User::create($data);
    }
}
