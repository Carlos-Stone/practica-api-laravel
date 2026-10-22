<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\Request;

class AsistenteController extends Controller
{
    public function index()
    {
        $asistentes = Asistente::all();
        return response()->json([
            'asistentes' => $asistentes,
            'status' => 200
        ]);
    }
    //
}
