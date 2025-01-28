<?php

    public class Empresa extends Funcionario{

        private $funcionarios;

        public function __construct(){
            $funcionarios = array();
        }

        function adicionarFuncionario($funcionario){
            $funcionarios[] = $funcionario;
        }

        public exibirFolhaDePagamento(){

            foreach($funcionarios = $key => $value){
                echo 'Nome: '.$value['nome'].' CPF: '.$value['cpf'];
            }
        }
    }   


    $funcionarios = new Funcionario();
?>