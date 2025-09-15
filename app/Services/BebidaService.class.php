<?php

namespace App\Services;

use App\Repositories\BebidaRepositoryInterface;
use App\Models\Bebida;

class BebidaService
{
    private BebidaRepositoryInterface $repo;

    public function __construct(BebidaRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function listar(): array
    {
        return $this->repo->getAll();
    }

    public function buscar(int $id): ?Bebida
    {
        return $this->repo->findById($id);
    }

    public function criar(array $data): Bebida
    {
        $bebida = new Bebida($data);
        $this->repo->save($bebida);
        return $bebida;
    }

    public function excluir(int $id): bool
    {
        return $this->repo->delete($id);
    }
}
