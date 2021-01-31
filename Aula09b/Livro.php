<?php
    require_once "Pessoa.php";
    require_once 'Publicacao.php';
    
class Livro implements Publicacao {   
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Construtor
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    
    //Métodos especiais
    public function detalhes(){
        echo "<hr>";
        echo "Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Total de páginas: " . $this->totPaginas . ". Página atual: " . $this->pagAtual;
        echo "<br>Sendo lido por " . $this->leitor->getNome();
    }
    
    //Implements
    public function abrir(){
        $this->aberto = true;
    }
    
    public function fechar(){
        $this->aberto = false;
    }
    
    public function folhear($p){
        if ($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    
    public function avancarPag(){
        $this->pagAtual++;
    }
    
    public function voltarPag(){
        $this->pagAtual--;
    }

    //getters and setters
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
}
