<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Disciplina
 *
 * @author tainarareis
 */
include_once 'Professor.php';
include_once 'Secretaria.php';
class Disciplina {
    
   
    
    //atributos
    private $professor;
    private $secretaria;
    private $nome;
    private $descricao;
    private $vagas;
    private $codigo;
    
    public function Disciplina(){
        $this->professor = new Professor;
        $this->secretaria = new Secretaria;
    }

    public function set($prop, $value){
        $this->$prop = $value;
    }
    
   function get($prop){
        return $this->$prop;
    }
}
?>