<?php

    public class FuncionarioAssalariado{

        private $salarioFixo;

        public set_salarioFixo($sf){
            this->$salarioFixo = $sf;
        }
        public get_salarioFixo(){
            return this->$salarioFixo;
        }

        public function __construct(){
            $salarioFixo = 0;
        }

        public function calcularPagamento(){
            return $salarioFixo;
        }
    }