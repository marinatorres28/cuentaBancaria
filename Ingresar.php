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
                <label for="cantidad">Indica la cantidad que quieres ingresar: </label>
                <input type="text" name="cantidad" id="cantidad">
                <input type="submit" value="Ingresar" class="boton">
            </p>

        </form>
        <p class="padding">
            <a href="index2.php" class="boton">Volver</a>
        </p>
    </div>
</div>

<?php


if (!empty($_POST['cantidad'])) {
    // Obtener la cantidad ingresada desde el formulario
    $cantidad = $_POST['cantidad'];

    // Ingresar la cantidad con el método ingresar que esta creado en la clase CuentaBancaria
    $_SESSION["cuenta"]->ingresar($cantidad);

    // Mensaje de confirmación
    echo "<p class='centrado'>Has ingresado: $cantidad €</p>";
}
?>