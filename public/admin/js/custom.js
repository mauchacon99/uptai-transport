(function($) {
	"use strict";
	
    //Left nav scroll
    $(".nano").nanoScroller();

    // Left menu collapse
    $('.left-nav-toggle a').on('click', function (event) {
        event.preventDefault();
        $("body").toggleClass("nav-toggle");
    });
	
	// Left menu collapse
    $('.left-nav-collapsed a').on('click', function (event) {
        event.preventDefault();
        $("body").toggleClass("nav-collapsed");
    });
	
	// Left menu collapse
    $('.right-sidebar-toggle').on('click', function (event) {
        event.preventDefault();
        $("#right-sidebar-toggle").toggleClass("right-sidebar-toggle");
    });
	
	//metis menu
   $('#menu').metisMenu();
	
    //slim scroll
    $('.scrollDiv').slimScroll({
        color: '#eee',
        size: '5px',
        height: '293px',
        alwaysVisible: false
    });
	
	//tooltip popover
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
 
    $('body').on('change', '#states_id', function (event) {
           $.ajax({
               type: "get",
               url: 'municipios/'+ $(this).val(),
               success:function(data) {
                   $('#municipalities_id').empty();
                   $('#parishes_id').empty();
                   $.each(data, function() {
                       $('#municipalities_id').append("<option value='" + this.id + "'>" + this.name + "</option>");
                   });
               } 
       });   
   });
    $('body').on('change', '#municipalities_id', function (event) {
           $.ajax({
               type: "get",
               url: 'parroquias/'+ $(this).val(),
               success(data) {
                    $('#parishes_id').empty();
                    $.each(data, function() {
                         $('#parishes_id').append("<option value='" + this.id + "'>" + this.name + "</option>");
                    });
               } 
       });   
   });                 
 

    $('.table').DataTable( {
        ordering: true,
       "scrollCollapse": true,
       "paging":         true,
       dom: '<B>frtipl',
       keys: true,
       buttons: [
           {
               extend: 'pdfHtml5',
               text: '<span class="fas fa-file-pdf fa-2x"></span>',
               titleAttr: 'Exportar a pdf',
               className: 'btn btn-primary',
               "sPdfMessage": "Conductores del Sistema de transporte"
           },
           {
               extend: 'excelHtml5',
               text: '<span class="fas fa-file-excel fa-2x"></span>',
               titleAttr: 'Exportar a excel',
               className: 'btn btn-danger'
           }
       ],
       select: true,
       language: {
           search: "<h4>Buscar:</h4>",
           "sProcessing": "Procesando...",
           "sLengthMenu": "Mostrar _MENU_ registros",
           "sZeroRecords": "No se encontraron resultados",
           "sEmptyTable": "Ningún dato disponible en esta tabla ",
           "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
           "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
           "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
           "sInfoPostFix": "",
           "sUrl": "",
           "sInfoThousands": ",",
           "sLoadingRecords": "Cargando...",
           "oPaginate": {
               "sFirst": "Primero",
               "sLast": "Último",
               "sNext": "Siguiente",
               "sPrevious": "Anterior"
           },
           "buttons": {
           "copy": "Copiar",
           "colvis": "Visibilidad"
           },
       }
    });
  
})(jQuery);
