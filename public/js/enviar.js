$(function() {
    $('#errors').hide();
    $('.success').hide();
    $("#formulario-contacto").submit(function(e) {
        var route = $('#formulario-contacto').data('route');
        var form_data = $(this);
        $('.errors').remove();

        $.ajax({
            type: 'POST',
            url: route,
            data: form_data.serialize(),
            success: function(Response) {
                console.log(Response);
                if ((Response.nombre) || (Response.telefono) || (Response.email) || (Response.pais) || (Response.provincia) || (Response.localidad) || (Response.razon) || (Response.mensaje)) {
                    $('#errors').show();
                };
                if (Response.success) {
                    $('#errors').hide();
                    $('.success').show();
                    $('#formulario-contacto').hide();

                }
            }
        });
        e.preventDefault();
    });

});