<?php
class CuentaBancaria {
    private $usuario;
    private $pin;
    private $entradas;
    private $salidas;
    private $saldo;
    public function __construct($usuario, $pin) {
        $this->usuario=$usuario;
        $this->pin=$pin;
        $this->entradas=array();
        $this->salidas=array();
        $this->saldo=0;
    }
    public function cambiaPin($pin) {
        $this->pin=$pin;
    }
    public function validaUsuario($usuario, $pin) {
        if($this->usuario==$usuario && $this->pin==$pin) {
            return true;
        }
        else {
            return false;
        }
    }
    public function ingresar($cantidad) {
        $this->entradas[]=$cantidad;
        $this->saldo=$this->saldo+$cantidad;
    }
    public function sacar($cantidad) {
        if($cantidad > $this->saldo) {
            return false;
        }
        else {
            $this->salidas[]=$cantidad;
            $this->saldo=$this->saldo-$cantidad;
            return true;
        }
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getEntradas() {
        return $this->entradas;
    }
    public function getSalidas() {
        return $this->salidas;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }


}
//$cuenta=new CuentaBancaria("Fidel","1234");

//if($cuenta->validaUsuario("Fidel","1234")) {
//    echo "usuario válido <br/>";
//    echo "Saldo actual: ".$cuenta->getSaldo()."<br/>";
//    $cuenta->ingresar(100);
//    echo "Se han ingresado 100€, saldo actual: ".$cuenta->getSaldo()."€<br/>";
//
//    if($cuenta->sacar(80)) {
//        echo "Se han sacado 80€, saldo actual: ".$cuenta->getSaldo()."€<br/>";
//        echo "<h3>Listado entradas</h3>";
//        foreach($cuenta->getEntradas() as $entrada) {
//            echo "Entrada: $entrada <br/>";
//        }
//        echo "<h3>Listado salidas</h3>";
//        foreach($cuenta->getSalidas() as $salida) {
//            echo "Salida: $salida <br/>";
//        }
//    }
//    else {
//        echo "No tienes suficiente dinero en la cuenta";
//    }
//}
//else {
//    echo "usuario no válido";
//}
?>
