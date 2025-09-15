<?php

namespace App\Http\Controllers;

use App\Services\BebidaService;
use Illuminate\Http\Request;

class BebidaController extends Controller
{
    private BebidaService $service;

    public function __construct(BebidaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service->listar());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nm_bebida'   => 'required|string',
            'ds_preparo'  => 'required|string',
        ]);

        $bebida = $this->service->criar($data);
        return response()->json($bebida, 201);
    }

    public function show($id)
    {
        $bebida = $this->service->buscar((int)$id);
        return response()->json($bebida);
    }

    public function destroy($id)
    {
        $ok = $this->service->excluir((int)$id);
        return response()->json(['deleted' => $ok]);
    }
}
