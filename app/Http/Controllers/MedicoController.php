<?php

namespace App\Http\Controllers;

use App\Models\Medico;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos', compact('medicos'));
    }
}