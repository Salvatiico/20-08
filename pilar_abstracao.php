<?php


class Funcionario{

//atributos
public $nome='Luis Fernando Funari Junior da Silva Filho';
public $telefone='99 99999-9999';
public $numFilhos=3;

/* função - método */
function resumirCardFunc() {
    return "$this->nome e ele possui $this->numFilhos filho(s)";
}

function modificarNumFilhos() {
    $this->numFilhos = $numFilhos;
}

}

$k= new Funcionario();
echo $k->modificarNumFilhos() . '<br/>';
$k->modificarNumFilhos(3) . '<br/>';

echo $k->resumirCardFunc();


?>