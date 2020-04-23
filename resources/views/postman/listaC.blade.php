@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid mt-5">
  <div class="container">
    <h1 class="display-4">Sistema Publico de Radiodifusión del Estado Méxicano | PostMan |</h1>
    <p class="lead">Servicio de rececpción y envío.</p>
  </div>
</div>
<div class="container container-fluid">
  <table class="table table-bordered" id="laravel_datatable">
    <thead>
      <tr>
          <th>Id</th>
          <th>Folio</th>
          <th>Unidad administrativa solicitante</th>
          <th>Numero de oficio</th>
          <th>Fecha maxima de recepción</th>
          <th>Hora maxima de recepción</th>
          <th>Contenido del paquete</th>
          <th>Justificación Urgente</th>
      </tr>
    </thead>
  </table>
</div>
@endsection
