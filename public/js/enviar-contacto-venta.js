$(document).ready(function() {
    $("#formulario-ventas").bind("submit", function() {
        $("#enviando").removeClass("hide");
        $("#submit").addClass("hide");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(respuesta) {
                if (respuesta == "PHPnoEnviado") {
                    $("#alerta").removeClass("hide").removeClass("alert-success");
                    $(".respuesta").html("Complete todos los campos ");
                    $(".mensaje-alerta").html("para enviar el formulario.");
                    $("#enviando").addClass("hide");
                    $("#submit").removeClass("hide");
                }
                // if (respuesta == "resolvercaptcha") {
                //     $("#alerta").removeClass("hide").removeClass("alert-success");
                //     $(".respuesta").html("Resuelva el recaptcha ");
                //     $(".mensaje-alerta").html("para enviar el formulario.");
                //     $("#enviando").addClass("hide");
                //     $("#submit").removeClass("hide");
                // }
                if (respuesta == "PHPEnviado") {
                    $("#formulario-ventas").addClass("hide");
                    $("#success").removeClass("hide");
                    $(".respuesta-success").html("Enviado! ");
                    $(".mensaje-success").html("El mensaje ha sido enviado correctamente.");
                }
            },
            error: function() {
                $("#alerta").removeClass("hide").removeClass("alert-success");
                $(".respuesta").html("Error! ");
                $(".mensaje-alerta").html("de conexion. Intentelo de nuevo!.");
                $("#enviando").addClass("hide");
                $("#submit").removeClass("hide");
            },
        });
        return false;
    });
});