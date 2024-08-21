<?php 

class Funcionario{
    public $nome=null;
    public $telefone=null;
    public $num_filhos=null;

    function setNome($nome){ // o que estiver na variavel nome foi setado no atributo nome
        $this->nome = $nome;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function setNumFilhos($num_filhos){
        $this->numFilhos = $num_filhos;
    }

    function getNome(){ // aqui armazenamos o valor do atributo nome
        return $this->nome;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function resumirCardFunc () { // aqui é a função para conectar no echo final
        return "$this->nome e ele possui $this->num_filhos filhos";
    }

    function modificarNumFilhos ($num_filhos){
       return $this->num_filhos = $num_filhos;
    }

}

// o $y vai armazenar oq esta nos sets e nos gets
$y= new Funcionario(); // criamos um novo funcionario
$y->setNome('Jubiscleudo'); // colocamos nome
$y->setNumFilhos(537); // e que ele tem 537 filho kk
echo $y->resumirCardFunc() . "<br>"; // daqui conectamos com a função 
echo $y->getNome() . ' e possui ' . $y->getNumFilhos() . ' filhos  '; //aqui concatenamos e mostramos os valores que possuem

?>