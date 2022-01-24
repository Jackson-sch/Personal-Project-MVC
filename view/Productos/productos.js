var tabla;

function init(){

}
$(document).ready(function(){
  tabla=$('#dataProductos').DataTable({
    "aProcessing": true,
    "aServerSide": true,
    dom: 'Bfrtip',
    buttons:{
      buttons: [
        {
          extend: 'excelHtml5',
          text: '<i class="far fa-file-excel"></i>',
          titleAttr: 'Excel',
          title: 'Productos',
          className: 'btn btn-success btn-oblong bd-2'
        },
        {
          extend: 'pdfHtml5',
          text: '<i class="far fa-file-pdf"></i>',
          titleAttr: 'PDF',
          title: 'Productos',
          className: 'btn btn-danger btn-oblong bd-2'
        },
        {
          extend: 'print',
          text: '<i class="fa fa-print"></i>',
          titleAttr: 'Imprimir',
          title: 'Productos',
          className: 'btn btn-info btn-oblong bd-2'
        }
      ]
    },
    "ajax": {
      url: '../../controller/productos.php?op=listar_productos',
      type: 'get',
      dataType: 'json',
      error: function(e){
        console.log(e.responseText);
      }
    },
    "bDestroy": true,
    "responsive": true,
    "bInfo": true,
    "iDisplayLength": 10,
    "order": [[0, "asc"]],
    "language": {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando un total de 8 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sloadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": "Activar para ordenar la columna de manera ascendente",
        "sSortDescending": "Activar para ordenar la columna de manera descendente"
      }
    }
  });
});

init();