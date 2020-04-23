@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid mt-5">
  <div class="container">
    <h1 class="display-4">Sistema Publico de Radiodifusión del Estado Méxicano | PostMan |</h1>
    <p class="lead">Servicio de rececpción y envío.</p>
    <button type="button" class="btn btn-primary">
        <a href="{{ route('envioC') }}"><span class="text-dark">{{ __('Envio de correspondencia') }}</span></a>    
    </button>
    <button type="button" class="btn btn-primary ml-3">
      <a href="{{ route('listaC') }}"><span class="text-dark">{{ __('Lista de correspondencias') }}</span></a>    
    </button>
  </div>
</div>
@endsection
