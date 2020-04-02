<?php
    // criando classe abstrata
    // classe abstrata muda o comportamento de classes
    // que irão implementa-la
    // CLASSE MODELO
    
    abstract class Equipamento {

        // metodos podem ser: public, private, protected
        // protected: pois, somente a classe modelo e as classe filhas
        // que herdam desta classe modelo poderão utilizar esta propriedade ligado.
        protected $ligado;

        // metodo construtor
        public function __construct() {
            $this->ligado = false;
        }

        public function ligar () {
            if ($this->ligado) {
                echo "O equipamento já está ligado.";
            }
            else {
                $this->ligado = true;
                echo "O equipamento foi ligado";
            }
        }

        public function desligar () {
            if (!$this->ligado) {
                $this->ligado = false;
                echo "O equipamento já esta desligado.";
            }
            else {
                echo "O equipamento foi desligado.";
            }
        }
    }
?>