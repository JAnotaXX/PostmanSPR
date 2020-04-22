@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4">Sistema Publico de Radiodifusión del Estado Méxicano</h1>
      <p class="lead text-center">Envio de correspondencia</p>
    </div>
</div>
<div class="container container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-primary mb-3">
                <div class="card-header text-white text-center" style="background-color: #27354d">Envío de correspondencia</div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="folioR">Folio</label>
                                <input type="text" class="form-control" id="folioR">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaRR">Fecha de Recepción</label>
                                <input type="text" class="form-control" id="fechaRR">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="horaRR">Hora de recepción</label>
                                <input type="text" class="form-control" id="horaRR">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="unidadSR">Unidad Administrativa Solicitante</label>
                                <input type="text" class="form-control" id="unidadSR">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numeroOR">Numero de Oficio</label>
                                <input type="text" class="form-control" id="numeroOR">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaOR">Fecha máxima en la que se recibirá el oficio</label>
                                <input type="text" class="form-control" id="fechaOR">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="horaOR">Hora máxima en la que se recibirá el oficio</label>
                                <input type="text" class="form-control" id="horaOR">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenidoPR">Contenido del paquete</label>
                            <textarea class="form-control" id="contenidoPR" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="justificacionPR">Justificación del envío con caracter de urgente</label>
                            <textarea class="form-control" id="justificacionPR" rows="4"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="urgentePR">
                            <label class="form-check-label" for="defaultCheck1">
                              Envío con caracter urgente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="terminosPR">
                            <label class="form-check-label" for="defaultCheck1">
                              Esta de acuerdo con los terminos y condiciones
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" id="enviarPR">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
