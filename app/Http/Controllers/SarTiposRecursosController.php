<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Sar_tipos_recursos;
use Illuminate\Support\Facades\Validator;

class SarTiposRecursosController extends Controller
{
    public function index()
    {
        $sar = Sar_tipos_recursos::all();
        return response ()->json($sar);
    }

    public function show(int $id)
    {
        try {
            $sar = Sar_tipos_recursos::findOrFail($id);
            return response ()->json($sar);
        } catch(Exception $e) {
            return response()->json("Error al obtener el tipo de recurso".$e->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        $validar = Validator::make($request->all(), [
            'codigo'        => 'required|numeric|digits:10',
            'tipo'          => 'required|string',
            'descripcion'   => 'required|string|max:250',
            'maxTiempo'     => 'required|numeric|max:4',
            'estado'        => 'required'
        ]);

        if ($validar->fails()) {
            $data = [
                'status'    => 400,
                'errors'    => $validar->errors(),
                'message'   => 'Error de validacion de los datos'
            ];
            return response()->json($data, 400);
        }

        $sar = Sar_tipos_recursos::create([
            'codigo'        => $request->codigo,
            'tipo'          => $request->tipo,
            'descripcion'   => $request->descripcion,
            'maxTiempo'     => $request->maxTiempo,
            'estado'        => $request->estado
        ]);

        if (!$sar) {
            $data = [
                'message' => "Error al registrar el tipo de recurso",
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'message' => "Tipo de recurso registrado correctamente",
            'status' => 200
        ];
        return response()->json($data, 201);
    }
}
