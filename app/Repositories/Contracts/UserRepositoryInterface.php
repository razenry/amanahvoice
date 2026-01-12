<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
    public function create(array $data);
}
