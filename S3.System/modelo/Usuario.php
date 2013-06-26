<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Fillipe
 */
class Usuario {
    protected $id;
    protected $login;
    protected $senha;
    protected $tipo;
    
    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
}

?>
