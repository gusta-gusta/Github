<?php


//Atributos
  class Pessoa {

    private $nome;
    private $idade;
    private $sexo;
    
//Função fazer Aniversário
    public function fazerAniver() {
        $this->$idade ++;
    }
//Construtor    
    function __construct ($nome, $idade, $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
    }
//Getters e Setters    
     function getNome() {
      return $this->nome;
    }
     function getIdade() {
      return $this->idade;
    }
     function getSexo() {
      return $this->sexo;
    }
     function setNome($nome) {
      $this->nome = $nome;
    }
     function setIdade($idade) {
      $this->idade = $idade;
    }
     function setSexo($sexo) {
      $this->sexo = $sexo;
    }
//

}
?>