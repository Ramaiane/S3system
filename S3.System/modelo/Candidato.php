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
class Candidato {
    private $login;
    private $senha;
    private $cpf;
    private $email;
    private $telefone;
    private $conclusaoGraduacao;
    
    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
}

?>
