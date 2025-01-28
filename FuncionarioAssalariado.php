<?php

    public class FuncionarioAssalariado extends Funcionario{

        private $salarioFixo;

        public set_nome($s){
            this->$salarioFixo = $s;
        }
        public get_nome(){
            return this->$salarioFixo;
        }

        public function __construct(){
            $salarioFixo = 0;
        }

        function calcularPagamento(){
            return $salarioFixo;
        }
    }