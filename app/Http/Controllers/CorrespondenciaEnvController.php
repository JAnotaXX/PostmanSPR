<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postman;
use Yajra\Datatables\Datatables;
use Redirect,Response,DB,Config;
use Carbon\Carbon;


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
        $folioR = $request->input("folioR");
        $unidadSR = $request->input("unidadSR");
        $numeroOR = $request->input("numeroOR");
        $fechaOR = $request->input("fechaOR");
        $horaOR = $request->input("horaOR");
        $contenidoPR = $request->input("contenidoPR");
        $justificacionPR = $request->input("justificacionPR");
        $urgentePR = $request->has("urgentePR");
        $pdf = \PDF::loadView('pdf.urgentePDF', compact('folioR','unidadSR','numeroOR','fechaOR','horaOR','contenidoPR','justificacionPR','urgentePR'));
        return $pdf->download('archivo.pdf');
        return view('postman.envioC');
    }

    public function guardarData()
    {
        $postman = DB::table('correspondenciae')->select('*');
        return datatables()->of($postman)
            ->make(true);
    }
}
