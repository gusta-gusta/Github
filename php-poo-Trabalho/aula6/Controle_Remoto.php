<?php
require_once 'controlador.php';
    class ControleRemoto implements Controlador{

    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    //Métodos Especiais
    function _construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    #gets
     function getVolume() {
            return $this-> volume;
     }
    function getLigado() {
            return $this-> ligado;
    }
    function getTocando() {
            return$this-> tocando;
    }


#sets
    function setVolume($volume) {
        $this->volume = $volume;
    }
    function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    //metodos 
    public function ligar() {
          $this->setLigado (true);
    }
    public function desligar() {
            $this->setLigado (false);
    }
    public function abrirMenu() {
            echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
            echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
            echo "<br>Volume: " . $this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i= $i + 10) {
                echo "";
            }
            echo "<br>";
            }
    } 
 function fecharMenu() {
         echo "<br>Fechando Menu...";
    }
    public function maisVolume() {  
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo() {

    }
    public function desligarMudo() {

    }
    public function play() {

    }
    public function pause() {

    }
    }


?>