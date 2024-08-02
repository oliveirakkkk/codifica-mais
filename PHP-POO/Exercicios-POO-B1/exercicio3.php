<?php  

 class Funcionario{ 
     private float $nomeFuncionario; 
     private string $cargoFuncionario; 
     private float $salarioFuncionario; 

     public function __construct($nomeFuncionario, $cargoFuncionario, $salarioFuncionario)
     { 
         $this->nomeFuncionario = $nomeFuncionario; 
         $this->cargoFuncionario = $cargoFuncionario; 
         $this->salarioFuncionario = $salarioFuncionario; 
     } 

     public function ajustarSalario($novoSalario){

        $this ->salarioFuncionario = $novoSalario;
     }

     public function alterarCargo($novoCargo){

        $this -> cargoFuncionario = $novoCargo;
     }

     public function exibirDetalhes(){ 
        echo "Nome do Funcionario requisitado: " . $this->nomeFuncionario . PHP_EOL . "Cargo do Funcionario Requisitado: " . $this->cargoFuncionario . PHP_EOL . "Salario do funcionario requisitado: " . $this->salarioFuncionario . PHP_EOL; 
    } 

}