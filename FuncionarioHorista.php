<?php

    public class FuncionarioHorista extends Funcionario{

        private $valorHora;
        private $horasTrabalhadas;

        public set_valoraHora($vh){
            this->$valroHora = $vh;
        }
        public get_valorHora(){
            return this->$valorHora;
        }

        public set_horasTrabalhadas($ht){
            this->$horasTrabalhadas = $ht;
        }
        public get_horasTrabalhadas(){
           return this->$horasTrabalhadas
        }


        public function __construct(){
            $valorHora = 0;
            $horasTrabalhadas = 0;
        }

        function calcularPagamento($valorHora, $horasTrabalhadas){
            $pagamento = $valorHora*$horasTrabalhadas;
            return $pagamento;
        }
    }