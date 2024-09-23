<?php
require_once "CuentaBancaria.php";
session_start();

$_SESSION["cuenta"] = new CuentaBancaria("Marina",1234);

if (!empty($_POST["usuario"]) && !empty($_POST["pin"])) {
    if (!$_SESSION["cuenta"]->validaUsuario($_POST["usuario"],$_POST["pin"])) {
           $errores[]="Usuario o password incorrectos";
    }
    $usuario = $_POST["usuario"];
    $pin = $_POST["pin"];
    // declaramos un array para almacenar los errores
    $errores=array();

    // validar usuario
    if (!preg_match("/^[a-zA-Z]*$/",$usuario)) {
        $errores[]="El nombre de usuario solo puede contener letras";
    }
    // validar pin
    if (!preg_match("/^[1-9]*$/",$pin)) {
        $errores[]="El pin solo puede contener numeros";
    }

}else{
    $errores[]="Todos los campos son obligatorios";
}

// comprobamos que no haya errores
if (count($errores) > 0) {
    for ($x = 0; $x < count($errores); $x++) {
        $cadena .= $errores[$x];
        // si hay errores los mandamos al index por el método get
    }
    header("Location: index.php?cadena=".$cadena);
} else {
    // si no hay errores, redirigimos al index 2
    header("Location: index2.php");
}

