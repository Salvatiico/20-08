<?php 

class Pessoa{ // criamos um objeto

    public $nome = null; //deixamos nulo o valor do nome

    function __construct($nome) { // aqui o objeto é declarado como iniciado
        echo 'Objeto iniciado';
        $this->nome = $nome;
    }

    function __destruct(){ // neste ja deixamos pronto para quando destruirmos
        echo 'Objeto removido';
    }

    function __get($atributo){ //usamos o GET "magico" para colocar um valor no $nome
        return $this->$atributo;
    }

}

$pessoa = new Pessoa('Lucas'); //aqui criamos a variavel como uma nova pessoa e setamos com o nome

echo '<br> Nome:' . $pessoa->__get('nome') . '<br>'; //  concatenamos com o  __get magico

unset($pessoa); // aqui eu removemos o objeto, deixando indefinida o variavel pessoa

?>