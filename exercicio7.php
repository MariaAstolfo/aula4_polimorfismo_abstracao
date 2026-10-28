<?php

 abstract class contaBancaria{
    protected string $titular;
    protected float $saldo;

    public function __construct($titular, $saldo){
        $this->titular=$titular;
        $this->saldo=$saldo;
    }

      public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if ($valor>0){
            echo "Depositar valor!";
        }
    }

    abstract public function calcularTarifa();
 }

 class contaCorrente extends contaBancaria{
    public function __construct($titular, $saldo){
        parent::__construct($titular, $saldo);
    }

    public function depositar($valor){

        if ($valor>0){
            echo "Conta Corrente: Saldo após depósito de R$ ". number_format($this->saldo+=$valor, 2, ',', '.');
        }
        else{
            echo "Não é possível depositar este valor!";
        }
    }
    public function calcularTarifa(){
         echo " tarifa de R$15,00; Saldo após desconto de R$". number_format($this->saldo-15, 2, ',', '.');
    }
 }

 class contaPoupanca extends contaBancaria{
    public function __construct($titular, $saldo){
        parent::__construct($titular, $saldo);
    }

    public function depositar($valor){

        if ($valor>0){
            echo "Conta Poupança: Saldo após depósito de R$ ". number_format($this->saldo+=$valor, 2, ',', '.');
        }
        else{
            echo "Não é possível depositar este valor!";
        }
    }

    public function calcularTarifa(){
        echo " tarifa de R$0,00; Saldo após desconto de R$". number_format($this->saldo, 2, ',', '.');
    }
}

$contaCorrente= new contaCorrente('maria', 500);
$contaCorrente->depositar(200);
$contaCorrente->calcularTarifa();

echo "<br>";

$contaPoupanca= new contaPoupanca('maria', 500);
$contaPoupanca->depositar(200);
$contaPoupanca->calcularTarifa();