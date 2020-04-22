<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorrespondenciaEnvController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'folioR' => 'required|max:255',
            'fechaRR' => 'required',
            'horaRR' => 'required|numeric',
            'unidadSR' => 'required|max:255',
            'numeroOR' => 'required',
            'fechaOR' => 'required|numeric',
            'horaOR' => 'required|max:255',
            'contenidoPR' => 'required',
            'justificacionPR' => 'required|numeric',
            'urgentePR' => 'required',
            'terminosPR' => 'required|numeric'
        ]);

    }//
}
