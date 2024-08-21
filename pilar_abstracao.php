<?php

class Funcionario {

    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;


    //funções e métodos

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function setTelefome($telefone) {
        $this->telefone = $telefone;
    }

    function getNome() {
        return $this->nome = $nome;
    }

    function getNumFilhos() {
        return $this->numFilhos = $numFilhos;
    }

    function getTelefone() {
        return $this->telefone = $telefone;
    }



    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

}

$y= new Funcionario();

//echo $y->modificarNumFilhos() . '<br/>';

$y->modificarNumFilhos(3);

echo $y->resumirCardFunc();



?>