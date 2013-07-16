<?php

include_once 'Usuario.php';

class Professor extends Usuario {

    private $idProfessor;
    private $idUsuario;
    private $idSecretaria;
    private $professor_nome;
    private $professor_email;
    private $professor_contatoTelefone;
    private $prop;
    private $value;
    private $login;
    private $senha;

//    public $tipo = 2;

    function set($prop, $value) {
        $this->$prop = $value;
    }

    function get($prop) {
        return $this->$prop;
    }

}

?>
