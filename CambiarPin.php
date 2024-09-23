<?php
include "header.php";
require_once "CuentaBancaria.php";
session_start();
?>

    <div class="container-principal">

        <div CLASS="container2">
            <h1 class="centrado">Saldo → <?php require_once "CuentaBancaria.php";
                echo $_SESSION["cuenta"]->getSaldo(); ?>
            </h1>
        </div>

        <div class="container1">
            <form action="" method="post">
                <p>
                    <label for="cantidad">Indica tu nuevo pin: </label>
                    <input type="text" name="pin" id="pin">
                    <input type="submit" value="Cambiar Pin" class="boton">
                </p>

            </form>
            <p class="padding">
                <a href="index2.php" class="boton">Volver</a>
            </p>
        </div>
    </div>

<?php


if (!empty($_POST['cantidad'])) {
    // Obtenemos el nuevo pin ingresado en el formulario
    $nuevoPin = $_POST['pin'];

    // metodo cambiar pin
    $nuevoPin->cambiaPin($nuevoPin);

    // Mensaje de confirmación
    echo "<p class='centrado'>¡Tu pin ha sido cambiado correctamente!</p>";
}
?>
