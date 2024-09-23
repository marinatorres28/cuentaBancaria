<?php
include "header.php";
require_once "CuentaBancaria.php";
session_start();

?>

<div class="container-principal">

    <div class="container2">
        <div class="centrado">
            <h1>Saldo → <?php require_once "CuentaBancaria.php";
                echo $_SESSION["cuenta"]->getSaldo(); ?>
            </h1>

            <h2>
                Hola <?php echo $_SESSION["cuenta"]->getUsuario();?>, Indica que quieres hacer:
            </h2>
        </div>
    </div>


<div class="container1">
    <p>
    <!--Ingresar-->
        <a href="Ingresar.php" class="boton">Ingresar</a>
    <!--Retirar-->
        <a href="Retirar.php" class="boton">Retirar</a>
    <!--Cambiar pin-->
        <a href="CambiarPin.php" class="boton">Cambiar PIN</a>
    </p>
</div>


</div>
