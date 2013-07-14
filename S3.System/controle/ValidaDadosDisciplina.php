<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe para validação de Dados para a Disciplina. Procurar método adequado instanciar a classe.
 * Esta classe é genérica. Por tanto é necessário chamar todos os métodos 
 * individualmente.
 *
 * @author Tainara
 */
class ValidaDadosDisciplina {
              
    function checaCampoEmBranco($dado){
        if (!isset($dado) || ($dado=="")){
            return false;
        }
        return true;
    }
    
  
    function campoNumerico($dadoNumerico){
        if(!is_numeric($dadoNumerico)) {
	    return false;
	}        
        return true;
    }
}

?>
