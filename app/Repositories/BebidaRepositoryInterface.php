<?php

namespace App\Repositories;

use App\Models\Bebida;

interface BebidaRepositoryInterface
{
    public function findById(int $id): ?Bebida;
    public function getAll(): array;
    public function save(Bebida $bebida): void;
    public function delete(int $id): bool;
}
