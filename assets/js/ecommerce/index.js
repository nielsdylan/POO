const CONTROLLER_URL = window.APP_CONFIG?.controllerUrl ;

$(document).ready(function () {
    console.log(CONTROLLER_URL);
    cargarData();
});
function cargarData() {
    $.ajax({
        url: CONTROLLER_URL + "UsuarioController.php",
        type: "GET", // o "GET" según cómo lo reciba tu controlador
        data: { action: "listar" }, // opcional, si manejas acciones en el controlador
        dataType: "json",
        success: function (response) {
            console.log(response);
            
        },
        error: function (xhr, status, error) {
            console.error("Error en AJAX:", status, error);
            console.log("Respuesta del servidor:", xhr.responseText);
        }
    });
}