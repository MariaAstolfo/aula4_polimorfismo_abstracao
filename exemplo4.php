<?php

abstract class Carro{
    abstract public function acelerar();
}

class CarroCombustao extends Carro{
    public  function acelerar(){
        echo "Injetando combustível";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando energia";
    }
}

$CarroCombustao= new CarroCombustao();
$CarroCombustao->acelerar();
echo "<br>";
$CarroEletrico = new CarroEletrico();
$CarroEletrico->acelerar();

