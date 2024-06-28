<?php

namespace App\Http\Controllers;

use App\Models\Sar_recursos;
use Illuminate\Http\Request;

class SarRecursosController extends Controller
{
    public function index()
    {
        $sar = Sar_recursos::all();
        return response ()->json($sar);
    }

    public function store(Request $request)
    {
        
    }
}
