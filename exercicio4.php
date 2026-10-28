<?php

abstract class eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca=$marca;
    }

    public function getMarca(){
        echo "Marca: ".$this->marca;
    }
    abstract public function ligar();

}

class televisao extends eletrodomestico{
    public function ligar(){
        echo " - a televisão foi ligada";
    }
}

 class geladeira extends eletrodomestico{
    public function ligar(){
        echo " - a geladeira foi ligada";
    }
 }

 $televisao= new televisao('eletrolux');
 $televisao->getMarca();
 $televisao->ligar();
 echo "<br>";
 $geladeira= new geladeira('brastemp');
  $geladeira->getMarca();
 $geladeira->ligar();