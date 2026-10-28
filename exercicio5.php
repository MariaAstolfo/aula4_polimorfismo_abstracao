<?php

abstract class formaGeometrica{
    abstract public function calcularArea();
}

class retangulo extends formaGeometrica{
    private float $base;
    private float $altura;

    public function __construct($base, $altura){
        $this->base=$base;
        $this->altura=$altura;
    }

    public function calcularArea(){
        return $this->base*$this->altura;
    }

    public function exibirarea(){
        echo "Valor da área do retângulo: ". number_format($this->calcularArea(), 2, '.'). "cm";
    }
}

class circulo extends formaGeometrica{
    private float $raio;

    public function __construct($raio){
        $this->raio=$raio;
    }

    public function calcularArea(){
        return 3.14*($this->raio**2);
    }

    public function exibirarea(){
        echo "Valor da área do circulo: ". number_format($this->calcularArea(), 2, '.'). "cm";
    }
}

$retangulo= new retangulo(8,5);
$retangulo->exibirarea();
echo "<br>";
$circulo= new circulo(4);
$circulo->exibirarea();