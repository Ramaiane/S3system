<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe para validação de Dados. Procurar método adequado instanciar a classe.
 * Esta classe é genérica. Por tanto é necessário chamar todos os métodos 
 * individualmente.
 *
 * @author Fillipe
 */
class ValidaDados {
                
      
    function checaCampoEmBranco($dado){
        if (!isset($dado) || ($dado=="")){
           /* header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Informe todos os campos para prosseguir com cadastro!";
            exit;*/
            return false;
        }
        return true;
    }
    function validaEmail($mail){
	if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/", $mail)) {
           /* header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Informe um email Valido para Prosseguir com o cadastro";
            exit;*/
            return false;
	}
        return true;
    }
    function verificaCPF($cpf){
        
        
		
 		if(!is_numeric($cpf)) {
  			$status = false;
		} else {
   			# Pega o digito verificador
  			$dv_informado = substr($cpf, 9,2);

   			for($i=0; $i<=8; $i++) {
   				$digito[$i] = substr($cpf, $i,1);
   			}
   			# Calcula o valor do 10° digito de verificação
   			$posicao = 10;
   			$soma = 0;

  			for($i=0; $i<=8; $i++) {
    			$soma = $soma + $digito[$i] * $posicao;
    			$posicao = $posicao - 1;
   			}

   			$digito[9] = $soma % 11;

   				if($digito[9] < 2) {
    				$digito[9] = 0;
   				} else {
    				$digito[9] = 11 - $digito[9];
   				} 
   				
   			# Calcula o valor do 11° digito de verificação
   			$posicao = 11;
   			$soma = 0;

   			for ($i=0; $i<=9; $i++) {
    			$soma = $soma + $digito[$i] * $posicao;
    			$posicao = $posicao - 1;
   			}

   			$digito[10] = $soma % 11;

   				if ($digito[10] < 2) {
    				$digito[10] = 0;
   				} else {
    				$digito[10] = 11 - $digito[10];
   				}
   				
  			# Verifica de o dv é igual ao informado
 			$dv = $digito[9] * 10 + $digito[10];
  			
			 	if ($dv != $dv_informado) {
   					$status = false;
  				} else
   					$status = true;
  				}
  
  		  # Se houver erro
 				if (!$status) {
					return false;
				}else return true;

	}
        
    
    function verificaSenha($senha1, $senha2){
        if(strlen($senha1) < 6){
            /*header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Senha muito curta. Por favor informe uma senha de no minimo 6 caracteres";
            exit;*/
            return false;
        }
        if($senha1 != $senha2){
            /*header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "As senhas informadas não batem";
            exit;*/
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
