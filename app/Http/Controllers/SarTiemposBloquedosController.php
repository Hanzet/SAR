<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sar_tiempos_bloquedos;
use Illuminate\Support\Facades\Validator;

class SarTiemposBloquedosController extends Controller
{
    public function store(Request $request)
    {
        $validar = Validator::make($request->all(), [
            'sar_recursos_id'   => 'required|string|exists:sar_recursos,id',
            'tipo_recurso'      => 'required|string',
            'fechaInicio'       => 'required|date',
            'fechaFin'          => 'required|date',
            'horaInicio'        => 'required|date_format:H:i',
            'horaFin'           => 'required|date_format:H:i',
            'motivo'            => 'required|string|max:250'
        ]);

        if($validar) {
            $data = [
                'status'    => 400,
                'errors'    => $validar->errors(),
                'message'   => 'Error de validacion de los datos'
            ];
            return response()->json($data, 400);
        }

        $sar = Sar_tiempos_bloquedos::create([
            'sar_recursos_id'   => $request->sar_recursos_id,
            'tipo_recurso'      => $request->tipo_recurso,
            'fechaInicio'       => $request->fechaInicio,
            'fechaFin'          => $request->fechaFin,
            'horaInicio'        => $request->horaInicio,
            'horaFin'           => $request->horaFin,
            'motivo'            => $request->motivo
        ]);

        if(!$sar) {
            $sar = [
                'status'    => 500,
                'message'   => 'Error al registrar el tiempo de bloqueo'
            ];
            return response()->json($sar, 500);
        }

        $data = [
            'message' => "Se ha registrado el tiempo de bloqueo satisfactoriamente",
            'status' => 200
        ];
        return response()->json($data, 201);
    }
}
