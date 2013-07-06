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
            header( "refresh:3;url=../interface/cadastro/cadastroDisciplina.php" ); 
            echo "Informe todos os campos para prosseguir com cadastro!";
            exit;
        }
    }
    
  
    function campoNumerico($dadoNumerico){
        if(!is_numeric($dadoNumerico)) {
	    header( "refresh:3;url=../interface/cadastro/cadastroDisciplina.php" ); 
            echo "Favor, atentar para campo numerico.";
            exit;
	}        
    }
}

?>
