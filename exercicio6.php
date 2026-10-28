<?php

abstract class funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome=$nome;
    }
    public function getNome(){
        echo $this->nome;
    }
    abstract public function calcularSalario();
}

class funcionarioFixo extends funcionario{
    protected float $salario;

    public function __construct($nome, $salario){
        parent::__construct($nome);
        $this->salario=$salario;
    }
    public function calcularSalario(){
        echo " - Salário do funcionário fixo:R$ ". number_format($this->salario, 2, ',', '.');
    }
}

class funcionarioComissionado extends funcionario{
    private int $venda;
    protected $salario;

    public function __construct($nome, $salario, $venda){
        parent::__construct($nome);
        $this->salario = $salario;
        $this->venda=$venda;
    }

    public function calcularSalario(){
        echo " - Salário do funcionário comissionado:R$ ";
        echo number_format($this->salario+ (0.10*$this->venda), 2, ',', '.');
    }

    
}

$funcionarioFixo= new funcionarioFixo('Maria', 2500);
$funcionarioFixo->getNome();
$funcionarioFixo->calcularSalario();
echo "<br>";
$funcionarioFixo->getNome();
$funcionarioComissionado= new funcionarioComissionado('maria', 1800, 8000);
$funcionarioComissionado->calcularSalario();