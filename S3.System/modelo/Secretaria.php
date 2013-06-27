<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Secretaria
 *
 * @author Carol
 */
include_once 'Usuario.php';

class Secretaria extends Usuario{
 
     
    
    private $login;
    private $sigla;
    private $nomeProgrma;
    private $responsavel;
    private $senha1;
    private $telefone;
    private $email;
    private $senha2;
    public $tipo = 2;
            
    function set($prop, $value){
        $this->$prop = $value;
    }  
    
     function get($prop){
        return $this->$prop;
    }
   
}


?>
