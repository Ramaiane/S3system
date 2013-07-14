<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidato
 *
 * @author Fillipe
 */
include_once 'Usuario.php';
class Candidato extends Usuario{
    
    private $cpf;
    private $email;
    private $telefone;
    private $nome;
    private $instituicaoGraduacao;
    private $cursoGraduacao;
    private $dataAdmissaoGraduacao;
    private $dataConclusaoGraduacao;
    public $tipo = 1;
    function __construct($cpf) {
        $this->cpf = $cpf;
    }

    

    
    
    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
}

?>
