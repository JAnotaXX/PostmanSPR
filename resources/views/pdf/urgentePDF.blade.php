<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }
 
        body {
            margin: 3cm 2cm 2cm;
        }
 
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #27354d;;
            color: white;
            line-height: 30px;
            text-align: center;
        }

        .primer {
            text-align: right;
        }

        .envio {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('images/logo_spr.png') }}" width="110" height="60" alt="" style="margin-top: 10px; margin-left:10px"> 
        </div>
    </div>
</header>
 
<main>
    <div class="row primer">
        @if($urgentePR==1)
            <h1 class="envio"><b>Envio de Correspondencia Urgente</b></h1>
        @else 
            <h1 class="envio"><b>Envio de Correspondencia Ordinario</b></h1>
        @endif
        <p>Unidad de Administración y Finanzas</p>
        <p>División de Recursos Materiales y Servicios Generales</p>
        <p>Coordinacion de Archivos</p>
        <p><b>Control de Correspondencia Externa</b></p>
    </div>
    <div class="row primer">
        <p><b>Datos para ser requisitados por la OFICINA DE CORRESPONDENCIA</b></p>
        
        <p>Folio</p> 
        <p><b>{{$folioR}}</b></p>
        <p>Fecha y hora de recepción</p>
        <p><b>{{$today}}</b></p>
    </div>
    <div class="row">
        <p><b>Unidad administrativa solicitante</b></p> 
        <p>{{$unidadSR}}</p>
        <p><b>Numero de oficio</b></p>
        <p>{{$numeroOR}}</p>
        <p><b>Fecha y hora máxima en la que se recibirá el documento en la institución respectiva</b></p>
        <a>{{$fechaOR}}</a>
        <a>{{$horaOR}}</a>
        <p><b>Contenido del paquete</b></p>
        <p>{{$contenidoPR}}</p>
        @if($urgentePR==1)
            <p><b>Justificación del envío con caracter urgente</b></p>
            <p>{{$justificacionPR}}</p>
        @endif
    </div>
    <div>
        <div class="row" style="margin-top: 70px">
            <a style="margin-left: 40px">Entrega</a>
            <a style="margin-left: 200px">Recibe</a>
            <a style="margin-left: 200px">Sello</a>
        </div>
    </div>
    <div>
        <div class="row" style="margin-top: 50px">
            <a style="margin-left: 20px">Nombre y Firma</a>
            <a style="margin-left: 130px">Nombre y Firma</a>
        </div>
    </div>
</main>
</body>
</html>