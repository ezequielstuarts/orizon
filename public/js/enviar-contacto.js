$(document).ready(function() {
    $("#formulario-contacto").bind("submit", function() {
        $("#enviando-contacto").removeClass("hide");
        $("#submit-contacto").addClass("hide");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(respuesta) {
                if (respuesta == "PHPnoEnviado") {
                    $("#alerta-contacto").removeClass("hide");
                    $(".respuesta-contacto").html("Complete todos los campos ");
                    $(".mensaje-alerta-contacto").html("para enviar el formulario.");
                    $("#enviando-contacto").addClass("hide");
                    $("#submit-contacto").removeClass("hide");
                }
                if (respuesta == "resolvercaptcha") {
                    $("#alerta-contacto").removeClass("hide").removeClass("alert-success");
                    $(".respuesta-contacto").html("Resuelva el recaptcha ");
                    $(".mensaje-alerta-contacto").html("para enviar el formulario.");
                    $("#enviando-contacto").addClass("hide");
                    $("#submit-contacto").removeClass("hide");
                }
                if (respuesta == "PHPEnviado") {
                    $("#formulario-contacto").addClass("hide");
                    $("#success-contacto").removeClass("hide");
                    $(".respuesta-success-contacto").html("Enviado! ");
                    $(".mensaje-success-contacto").html("El mensaje ha sido enviado correctamente.");
                }
            },
            error: function() {
                $("#alerta-contacto").removeClass("hide");
                $(".respuesta-contacto").html("Error! ");
                $(".mensaje-alerta-contacto").html("de conexion. Intentelo de nuevo!.");
                $("#enviando-contacto").addClass("hide");
                $("#submit-contacto").removeClass("hide");
            },
        });
        return false;
    });
});