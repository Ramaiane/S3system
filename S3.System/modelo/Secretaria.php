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
class Secretaria {
 
     
    
    private $login;
    private $sigla;
    private $nomeProgrma;
    private $responsavel;
    private $senha1;
    private $telefone;
    private $email;
    private $senha2;
    
    
    function set($prop, $value){
        $this->$prop = $value;
    }  
   
}


?>
