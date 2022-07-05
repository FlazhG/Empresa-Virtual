$(document).ready(function() {
    $('#reportTable').DataTable( {
        "responsive": true,
        "language": {
          "processing": "Procesando...",
          "lengthMenu": "Mostrar _MENU_ registros",
          "zeroRecords": "No se encontraron resultados",
          "emptyTable": "Ningún dato disponible en esta tabla",
          "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "infoThousands": ",",
          "loadingRecords": "Cargando...",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          },
          "aria": {
              "sortAscending": ": Activar para ordenar la columna de manera ascendente",
              "sortDescending": ": Activar para ordenar la columna de manera descendente"
          },
          "buttons": {
              "copy": "Copiar",
              "colvis": "Visibilidad",
              "collection": "Colección",
              "colvisRestore": "Restaurar visibilidad",
              "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
              "copySuccess": {
                  "1": "Copiada 1 fila al portapapeles",
                  "_": "Copiadas %d fila al portapapeles"
              },
              "copyTitle": "Copiar al portapapeles",
              "csv": "CSV",
              "excel": "Excel",
              "pageLength": {
                  "-1": "Mostrar todas las filas",
                  "1": "Mostrar 1 fila",
                  "_": "Mostrar %d filas"
              },
              "pdf": "PDF",
              "print": "Imprimir"
          },
          "autoFill": {
              "cancel": "Cancelar",
              "fill": "Rellene todas las celdas con <i>%d<\/i>",
              "fillHorizontal": "Rellenar celdas horizontalmente",
              "fillVertical": "Rellenar celdas verticalmentemente"
          },
          "decimal": ",",
          "searchBuilder": {
              "add": "Añadir condición",
              "button": {
                  "0": "Constructor de búsqueda",
                  "_": "Constructor de búsqueda (%d)"
              },
              "clearAll": "Borrar todo",
              "condition": "Condición",
              "conditions": {
                  "date": {
                      "after": "Despues",
                      "before": "Antes",
                      "between": "Entre",
                      "empty": "Vacío",
                      "equals": "Igual a",
                      "not": "No",
                      "notBetween": "No entre",
                      "notEmpty": "No Vacio"
                  },
                  "moment": {
                      "after": "Despues",
                      "before": "Antes",
                      "between": "Entre",
                      "empty": "Vacío",
                      "equals": "Igual a",
                      "not": "No",
                      "notBetween": "No entre",
                      "notEmpty": "No vacio"
                  },
                  "number": {
                      "between": "Entre",
                      "empty": "Vacio",
                      "equals": "Igual a",
                      "gt": "Mayor a",
                      "gte": "Mayor o igual a",
                      "lt": "Menor que",
                      "lte": "Menor o igual que",
                      "not": "No",
                      "notBetween": "No entre",
                      "notEmpty": "No vacío"
                  },
                  "string": {
                      "contains": "Contiene",
                      "empty": "Vacío",
                      "endsWith": "Termina en",
                      "equals": "Igual a",
                      "not": "No",
                      "notEmpty": "No Vacio",
                      "startsWith": "Empieza con"
                  }
              },
              "data": "Data",
              "deleteTitle": "Eliminar regla de filtrado",
              "leftTitle": "Criterios anulados",
              "logicAnd": "Y",
              "logicOr": "O",
              "rightTitle": "Criterios de sangría",
              "title": {
                  "0": "Constructor de búsqueda",
                  "_": "Constructor de búsqueda (%d)"
              },
              "value": "Valor"
          },
          "searchPanes": {
              "clearMessage": "Borrar todo",
              "collapse": {
                  "0": "Paneles de búsqueda",
                  "_": "Paneles de búsqueda (%d)"
              },
              "count": "{total}",
              "countFiltered": "{shown} ({total})",
              "emptyPanes": "Sin paneles de búsqueda",
              "loadMessage": "Cargando paneles de búsqueda",
              "title": "Filtros Activos - %d"
          },
          "select": {
              "1": "%d fila seleccionada",
              "_": "%d filas seleccionadas",
              "cells": {
                  "1": "1 celda seleccionada",
                  "_": "$d celdas seleccionadas"
              },
              "columns": {
                  "1": "1 columna seleccionada",
                  "_": "%d columnas seleccionadas"
              }
          },
          "thousands": "."
        }
    });
    // Boton PDF
      $('#pdf').on({
        'mouseover':function() {
          $(this).text('Descargar PDF');
        },
        'mouseout':function() {
          $(this).html('<i class="fa fa-file-pdf-o" aria-hidden="true"></i>');
        }
      });
      // Boton Excel
        $('#excel').on({
          'mouseover':function() {
            $(this).text('Descargar Excel');
          },
          'mouseout':function() {
            $(this).html('<i class="fa fa-file-excel-o" aria-hidden="true"></i>');
          }
        });
    // Boton Registrar Producto
      $('#registrar').on({
        'mouseover':function() {
          $(this).text('Registrar producto');
        },
        'mouseout':function() {
          $(this).html('<i class="fa fa-cloud-upload" aria-hidden="true"></i>');
        }
      });
    // Boton Registrar vehículo
      $('#registrar_vehiculo').on({
        'mouseover':function() {
          $(this).text('Registrar vehículo');
        },
        'mouseout':function() {
          $(this).html('<i class="fa fa-cloud-upload" aria-hidden="true"></i>');
        }
      });
    // Boton Registrar DetalleCar
      $('#registrar_detalle').on({
        'mouseover':function() {
          $(this).text('Registrar detalle vehicular');
        },
        'mouseout':function() {
          $(this).html('<i class="fa fa-cloud-upload" aria-hidden="true"></i>');
        }
      });
      // Boton Registrar Tramite
        $('#registrar_tramite').on({
          'mouseover':function() {
            $(this).text('Registrar tramite');
          },
          'mouseout':function() {
            $(this).html('<i class="fa fa-cloud-upload" aria-hidden="true"></i>');
          }
        });
      // Boton Registrar Polisa
        $('#registrar_polisa').on({
          'mouseover':function() {
            $(this).text('Registrar polisa de seguro');
          },
          'mouseout':function() {
            $(this).html('<i class="fa fa-cloud-upload" aria-hidden="true"></i>');
          }
        });
      // Boton Registrar Usuario
        $('#registrar_usuario').on({
          'mouseover':function() {
            $(this).text('Registrar usuario');
          },
          'mouseout':function() {
            $(this).html('<i class="fa fa-cloud-upload" aria-hidden="true"></i>');
          }
        });
      // Mayusculas
        $('.mayus').on("keypress", function () {
          $input=$(this);
          setTimeout(function () {
            $input.val($input.val().toUpperCase());
          },50);
        });
      // Cierre de Modals
        $('#modalRep').modal({backdrop: 'static', keyboard: false});
      // Bloqueo de fechas pasadas
        var fecha = new Date();
        var anio = fecha.getFullYear();
        var dia = fecha.getDate();
        var _mes = fecha.getMonth(); //viene con valores de 0 al 11
        _mes = _mes + 1; //ahora lo tienes de 1 al 12
        if (_mes < 10) //ahora le agregas un 0 para el formato date
        { var mes = "0" + _mes; }
        else
        { var mes = _mes.toString; }
        let fecha_minimo = anio + '-' + mes + '-' + dia; // Nueva variable
        document.getElementById('fechap1').setAttribute('min',fecha_minimo);
        document.getElementById('fechap2').setAttribute('min',fecha_minimo);
        document.getElementById('fechap3').setAttribute('min',fecha_minimo);
        document.getElementById('fechap4').setAttribute('min',fecha_minimo);
        document.getElementById('fechap5').setAttribute('min',fecha_minimo);
        document.getElementById('fechap6').setAttribute('min',fecha_minimo);
} );
