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
 
     
    private $enderecoLogo;
    protected $login;
    private $sigla;
    private $nomePrograma;
    private $responsavel;
    protected $senha;
    private $telefone;
    private $email;
    private $dataRegistro;
    public $tipo = 2;
    

    
    function set($prop, $value){
        $this->$prop = $value;
    }  
    
     function get($prop){
        return $this->$prop;
    }
   
}


?>
