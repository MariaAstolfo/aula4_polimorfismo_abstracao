<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando!";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
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

$CarroEletrico= new CarroEletrico();
$CarroEletrico->acelerar();