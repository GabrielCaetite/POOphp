<?php

    public class Funcionario{
        
        private $nome;
        private $cpf;

        public set_nome($n){
            this->$nome = $n;
        }
        public get_nome(){
            return this->$nome;
        }

        public set_cpf($cpf){
            this->$cpf = $cpf;
        }
        public get_cpf(){
            return this->$cpf;
        }
        
        public function __construct(){
            $nome = '';
            $cpf = 0;
        }

        public function calcularPagamento(){
            echo 'pagamento';
        }

    }