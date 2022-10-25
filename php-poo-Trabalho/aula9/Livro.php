<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

//Atributos
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

//Construtor
    function __construct($ti, $au, $totpg,$lei) {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $totpg;
        $this->leitor = $lei;
  }

//Getters e Setters
   function getTitulo () {
    return $this->titulo;
  }
   function getAutor () {
    return $this->autor;
  }
   function getTotPaginas () {
    return $this->totPaginas;
  }
   function getPagAtual () {
    return $this->pagAtual;
  }
   function getAberto () {
    return $this->aberto;
  }
   function getLeitor () {
    return $this->leitor;
  }
   function setTitulo ($ti) {
    $this->titulo = $ti;
  }
   function setAutor ($au) {
    $this->autor = $au;
  }
   function setTotPaginas ($totpg) {
    $this->totPaginas = $totpg;
  }
   function setPagAtual ($pg_at) {
    $this->pagAtual = $pg_at;
  }
   function setAberto ($ab) {
    $this->aberto = $ab;
  }
   function setLeitor ($lei) {
    $this->leitor = $lei;
  }
//Funções
  public function detalhes() {
       
  }
  public function abrir(){
    $this->ab = true;
  }
  public function fechar(){
    $this->ab = false;
  }
  public function folhear($p){
    if ($p > $this->totpg) {
        $this->pg_at = 0;
    }else {
        $this->pg_at = $p;
    }
  }
  public function avancarPag(){
    $this->$pg_at = $this->pg_at + 1;   
  }
  public function voltarPag(){
    $this->pg_at --;
  }

}
?>