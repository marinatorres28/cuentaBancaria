<?php
include "header.php";
?>
<div class="container-principal">

    <div class="container2">
        <div class="centrado">
            <p></p>
        </div>
    </div>


<div class="container1">
<!--Formulario Acceso-->
    <form action="lectura.php" method="post">
        <!--Usuario-->
        <p>
            <label for="usuario"></label>
            <input type="text" id="usuario" name="usuario" placeholder="Usuario">
        </p>
        <!--PIN-->
        <p>
            <label for="pin"></label>
            <input type="text" id="pin" name="pin" placeholder="Pin">
        </p>
        <!--BOTONES-->
        <input type="submit" value="Siguiente" id="enviar" class="boton">
    </form>
</div>


</div>
<?php
if (isset($_GET["cadena"])){
    $errores = $_GET["cadena"];
    echo $errores;
}
?>

</body>
</html>


