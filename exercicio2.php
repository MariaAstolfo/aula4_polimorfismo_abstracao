<?php

class Frete{
    protected float $peso;

    public function __construct($peso){
        $this->peso=$peso;
    }
    public function calcularFrete(){
        echo "Peso da mercadoria será em Kg";
    }
}

class freteNormal extends Frete{
    public function __construct($peso){
        parent::__construct($peso);
    }
     public function calcularFrete(){
         return ($this->peso*2)+10;
     }
     public function exibirInformacoes(){
        echo "Frete Normal: R$". number_format($this->calcularFrete(), 2, ',', '.');
     }
}

class freteExpresso extends Frete{
    public function __construct($peso){
        parent::__construct($peso);
    }
    public function calcularFrete(){
        return ($this->peso*5)+20;
    }
     public function exibirInformacoes(){
        echo "Frete Expresso: R$". number_format($this->calcularFrete(), 2, ',', '.');
     }
}

class retiradaLoja{
    public function exibirInformacoes(){
          echo "Retirada na Loja: R$ 0,00";
     }
}


$freteNormal= new freteNormal(3);
$freteNormal->calcularFrete();
$freteNormal->exibirInformacoes();

echo "<br>";

$freteExpresso= new freteExpresso(3);
$freteExpresso->calcularFrete();
$freteExpresso->exibirInformacoes();

echo "<br>";

$retiradaLoja= new retiradaLoja(3);
$retiradaLoja->exibirInformacoes();