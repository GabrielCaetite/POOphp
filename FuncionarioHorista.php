<?php

public class FuncionarioHorista{

    private $valorHoras;
    private $horasTrabalhadas;

    public function __construct(){
        $valorHoras = 0;
        $horasTrabalhadas = 0;
    }

    public calcularPagamento($valorHoras, $horasTrabalhadas){
        
        $pagamento = $valorHoras*$horasTrabalhadas;
        echo 'Pagamento final: R$'.$pagamento.',00';
    }
}