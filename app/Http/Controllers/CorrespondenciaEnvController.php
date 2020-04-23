<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postman;
use Yajra\Datatables\Datatables;
use Redirect,Response,DB,Config;

class CorrespondenciaEnvController extends Controller
{
    function guardar(Request $request){


        $postman = new Postman;
        $postman->folioR = $request->input("folioR");
        $postman->unidadSR = $request->input("unidadSR");
        $postman->numeroOR = $request->input("numeroOR");
        $postman->fechaOR = $request->input("fechaOR");
        $postman->horaOR = $request->input("horaOR");
        $postman->contenidoPR = $request->input("contenidoPR");
        $postman->justificacionPR = $request->input("justificacionPR");
        $postman->urgentePR = $request->has("urgentePR");
        $postman->terminosPR = $request->has("terminosPR");
        $postman->save();
        $postman = Postman::all();
        return view('postman.envioC');
        console.log("Guardado");
    }

    public function guardarData()
    {
        $postman = DB::table('correspondenciae')->select('*');
        return datatables()->of($postman)
            ->make(true);
    }

    public function download()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];
        $pdf = \PDF::loadView('pdf.urgentePDF', $data);
        return $pdf->download('archivo.pdf');
    }
}
