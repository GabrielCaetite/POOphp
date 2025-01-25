<?php

public class FuncionarioAssalariado{

    private $salarioFixo;
    private $horasTrabalhadas;

    public function __construct(){
        $salarioFixo = 0;
        $horasTrabalhadas = 0;
    }

    public calcularPagamento(){
        return $salarioFixo;
    }
}