<?php

namespace App\Repositories;

use App\Models\Bebida;

class PostgresBebidaRepository implements BebidaRepositoryInterface
{
    public function findById(int $id): ?Bebida
    {
        return Bebida::find($id);
    }

    public function getAll(): array
    {
        return Bebida::all()->toArray();
    }

    public function save(Bebida $bebida): void
    {
        $bebida->save();
    }

    public function delete(int $id): bool
    {
        return (bool) Bebida::where('id', $id)->delete();
    }
}
