<?php
include_once 'Usuario.php';

class Professor extends Usuario{
    
    private $professor_nome;
    private $professor_email;
    private $professor_contatoTelefone;   
    
    
       function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    } 
    
}
?>
