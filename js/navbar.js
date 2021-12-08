$(document).ready(function(){
    noEnviarForms();
    interaccionPopUp();
    addNuevoUsuario();
    iniciarSesion();
    cerrarSesion();

});


function noEnviarForms(){
    $("#popRegistro").submit(function(e){
        e.preventDefault();
    });
    $("#popIniciarSesion").submit(function(e){
        e.preventDefault();
    });
}


function interaccionPopUp(){
    cerrarPopUp();
    abrirPopUp();
}
function abrirPopUp(){
    $("#botIniciarSesion").click(function(){
        $("#popIniciarSesion").css("display","grid");
        $("#pop").css("display","grid");
    });

    $("#botRegistro").click(function(){
        $("#popRegistro").css("display","grid");
        $("#pop").css("display","grid");
    });


}

function cerrarPopUp(){
    $("#pop").on("click",function(){
        $("#popIniciarSesion").css("display","none");
        $("#popRegistro").css("display","none");
        $("#pop").css("display","none");
    });

    $("#pop div").click(function(e) {
        e.stopPropagation();
    });
}

function iniciarSesion(){
    $("#regEnviarIS").click(function () {
        var usuario = $("#ISUsuario").val();
        var contrasena = $("#ISContrasena").val();
        var usuario = {
            "usuario": usuario,
            "contrasena": contrasena
        };

        $.ajax({
            url: "../../ajax/navbar_iniciarSesion.php",
            data: usuario,
            type: "POST",
            success: function (data) {
                if(data=="OK"){
                    notCorrecto("Sesion Iniciada!")
                } else{
                    notError(data);
                }
            },
            errro: function (error) {
                console.log("navbar_iniciarSesion.php ---->");
                console.log(error);
            }
        });
    });
}


function addNuevoUsuario() {
    $("#regEnviarR").click(function () {
        var usuario = $("#regUsuario").val();
        var nombre = $("#regNombre").val();
        var apellido = $("#regApellido").val();
        var fechaNacimiento = $("#regNacimiento").val();
        var email = $("#regEmail").val();
        var rEmail = $("#regREmail").val();
        var contrasena = $("#regContrasena").val();
        var usuario = {
            "usuario": usuario,
            "nombre": nombre,
            "apellido": apellido,
            "fechaNacimiento": fechaNacimiento,
            "email": email,
            "rEmail": rEmail,
            "contrasena": contrasena
        };

        console.log(usuario);
        $.ajax({
            url: "../../ajax/navbar_nuevoUsuario.php",
            data: usuario,
            type: "POST",
            success: function (data) {
                if(data=="OK"){
                    notCorrecto("Usuario Creado correctamente!")
                } else{
                    notError(data);
                }
            },
            errro: function (error) {
                console.log("navbar_nuevoUsuario.php ---->");
                console.log(error);
            }
        });
    });
}

function cerrarSesion(){
    $("#botCerrarSesion").click(function () {
        $.ajax({
            url: "../../ajax/navbar_cerrarSesion.php",
            type: "GET",
            success: function (data) {
                if(data=="OK"){
                    notCorrecto("Sesion Cerrada Correctamente!")
                } else{
                    notError(data);
                }
            },
            errro: function (error) {
                console.log("navbar_cerrarSesion.php ---->");
                console.log(error);
            }
        });
    });
}
const myNotificationErr = window.createNotification({
    // close on click
    closeOnClick: true,

    // displays close button
    displayCloseButton: false,

    // nfc-top-left
    // nfc-bottom-right
    // nfc-bottom-left
    positionClass: 'nfc-top-right',

    // callback
    onclick: false,

    // timeout in milliseconds
    showDuration: 3500,

    // success, info, warning, error, and none
    theme: 'error'
});
const myNotificationCorrecto = window.createNotification({
    // close on click
    closeOnClick: true,

    // displays close button
    displayCloseButton: false,

    // nfc-top-left
    // nfc-bottom-right
    // nfc-bottom-left
    positionClass: 'nfc-top-right',

    // callback
    onclick: false,

    // timeout in milliseconds
    showDuration: 3500,

    // success, info, warning, error, and none
    theme: 'success'
});

function notCorrecto(mensaje){
    myNotificationCorrecto({
        title: 'Completado',
        message: mensaje
    });
}

function notError(mensaje){
    myNotificationErr({
        title: 'Error',
        message: mensaje
    });
}