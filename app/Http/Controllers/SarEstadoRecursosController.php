<?php

namespace App\Http\Controllers;

use App\Models\sar_estado_recursos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SarEstadoRecursosController extends Controller
{
    public function index()
    {
        $sar = sar_estado_recursos::all();
        return response ()->json($sar);
    }

    public function show(int $id)
    {
        try {
            $sar = sar_estado_recursos::find($id);
            return response ()->json($sar);
        } catch(Exception $e) {
            return response()->json("Error al obtener el estado del recurso".$e->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        $validar = Validator::make($request->all(), [
            'descripcion'       => 'required|string|max:500',
            'afectaReserva'     => 'required|string'
        ]);

        if($validar->fails()) {
            $data = [
                'status'    => 400,
                'errors'    => $validar->errors(),
                'message'   => 'Error de validacion de los datos'.$validar->errors()->first()
            ];
            return response()->json($data, 400);
        }

        $sar = Sar_estado_recursos::create([
            'descripcion'       => $request->descripcion,
            'afectaReserva'     => $request->afectaReserva
        ]);

        if(!$sar) {
            $data = [
                'status'    => 500,
                'errors'    => $validar->errors(),
                'message'   => 'Error al crear el estado del recurso'
            ];
        }

        $data = [
            'status'    => 200,
            'message'   => 'Estado del recurso creado exitosamente',
        ];
        return response()->json($data,201);
    }
}
