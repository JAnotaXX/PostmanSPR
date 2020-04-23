$(document).ready( function () {
    $('#laravel_datatable').DataTable({
       processing: true,
       serverSide: true,
       "language": {
          "sProcessing": "Procesando...",
          "lengthMenu": "mostrando _MENU_ registros por página",
          "zeroRecords": "No encontramos registros",
          "info": "Página _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrando de _MAX_ total de registros.)",
          "sSearch": "Buscar:",
          "oPaginate": {
             "sFirst": "Primero",
             "sLast": "Último",
             "sNext": "Siguiente",
             "sPrevious": "Anterior"
          }
       },
       ajax: "guardarData",
       columns: [
          { data: 'id', name: 'id' },
          { data: 'created_at', name: 'created_at' },

       ]
    });
 });
 