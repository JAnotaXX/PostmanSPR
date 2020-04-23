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
                    <div class="row">
                        <div class="col-12">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        </div>
                    </div>
                    <form action="/sendC" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="folioR">Folio</label>
                                <input type="text" class="form-control" id="folioR" name="folioR" maxlength="15" onkeyup="this.value=NumText(this.value)" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="unidadSR">Unidad Administrativa Solicitante</label>
                                <input type="text" class="form-control" id="unidadSR" name="unidadSR" maxlength="30" onkeyup="this.value=NumText(this.value)" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numeroOR">Numero de Oficio</label>
                                <input type="text" class="form-control" id="numeroOR" name="numeroOR" maxlength="15" onkeyup="this.value=Numeros(this.value)" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaOR">Fecha máxima de recepción</label>
                                <input type="date" class="form-control" id="fechaOR" name="fechaOR" min="2020-01-01" max="2020-12-31" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaOR">Hora máxima de recepción</label>
                                <input type="time" class="form-control" id="horaOR" name="horaOR" min="00:00" max="24:00"step="3600" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenidoPR">Contenido del paquete</label>
                            <textarea class="form-control" id="contenidoPR" rows="4" name="contenidoPR" maxlength="300" onkeyup="this.value=NumText(this.value)" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="justificacionPR">Justificación del envío con caracter de urgente</label>
                            <textarea class="form-control" id="justificacionPR" rows="4" name="justificacionPR" maxlength="300" onkeyup="this.value=NumText(this.value)" disabled></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="urgentePR" name="urgentePR" onclick="myFunction()">
                            <label class="form-check-label" for="defaultCheck1">
                              Envío con caracter urgente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="terminosPR" name="terminosPR" required>
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
