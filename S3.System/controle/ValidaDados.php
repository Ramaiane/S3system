<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe de Validação de Dados 
 * Normalmente usada para verificação de dados 
 * para novos Usuários
 * @author Fillipe
 */
class ValidaDados {
    private $dados = array();
    
    function set($prop, $value){
         $this->$prop = $value;
    }
    function imprime(){
       print_r($this->dados);
   
    }
    
    function validacaoDados(){
        
    }
    function encerrar(){
        
    }
}

?>
