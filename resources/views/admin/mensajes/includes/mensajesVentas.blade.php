<script>
    function format ( dataMensajeVentas ) {
    // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+

            '<tr>'+
                '<p> <b>Localidad: </b>'+dataMensajeVentas.localidad+' - '+dataMensajeVentas.provincia+' - '+dataMensajeVentas.pais+'</p>'+'<hr/>'+
            '</tr>'+

            '<tr>'+
                '<p> <b>Teléfono: </b>'+dataMensajeVentas.telefono+'</p>'+'<hr/>'+
            '</tr>'+

            '<tr>'+
                '<p> <b>Mensaje: </b>'+dataMensajeVentas.mensaje+'</p>'+'<hr/>'+
            '</tr>'+
        '</table>';
    }
</script>
<script>
    $(document).ready(function() {
        var tableVentas = $('#mensajesVentas').DataTable( {
            "serveSide": true,
            "ajax":"{{ url('api/getMensajesVentas')}}",
            "columns": [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                    {"data": 'created_at'},
                    {"data": 'nombre'},
                    {"data": 'email'},
                    {"data": 'razon'},
            ],
            
            "order": [[1, 'desc']],
            "language": {
                "lengthMenu": "Ver _MENU_ mensajes por pagina",
                "zeroRecords": "No hay registros",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay Registros con esa búsqueda",
                "infoFiltered": "(filtrado entre _MAX_ total de registros)"
            }
        } );

    // Add event listener for opening and closing details
    $('#mensajesVentas tbody').on('click', 'td', function () {
            var tr = $(this).closest('tr');
            var row = tableVentas.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    } );
</script>