<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index()
    {
        // Obtener todos los miembros
        $miembros = Miembro::all();
        return view('miembros.index', ['miembros' => $miembros]);  // Enviar la variable $miembros a la vista
    }
}
