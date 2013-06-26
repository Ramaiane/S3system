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
    private $conclusaoGraduacao;
    private $nome;
    private $instituicaoGraduacao;
    private $cursoGraduacao;
    private $dataAdmissaoGraduacao;
    private $dataConclusaoGraduacao;
    public $tipo = 1;
    
    
    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
}

?>
