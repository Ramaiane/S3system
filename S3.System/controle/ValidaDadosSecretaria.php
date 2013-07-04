<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidaDadosSecretaria
 *
 * @author Carol
 */
class ValidaDadosSecretaria {
    
   function checaCampoEmBranco($dado){
        if (!isset($dado) || ($dado=="")){
            header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "Informe todos os campos para prosseguir com cadastro!";
            exit;
        }
    }
    function validaEmail($mail){
	if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/", $mail)) {
            header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "Informe um email Valido para Prosseguir com o cadastro";
            exit;
	}
    }
    
    
    function verificaSenha($senha1, $senha2){
        if(strlen($senha1) < 6){
            header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "Por favor informe uma senha de no minimo 6 caracteres";
            exit;
        }
        if($senha1 != $senha2){
            header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "As senhas informadas não batem";
            exit;
        }
    }
    function campoNumerico($dadoNumerico){
        if(!is_numeric($dadoNumerico)) {
	    header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "Favor, atentar para campo numerico";
            exit;
	}        
    }
}

?>
