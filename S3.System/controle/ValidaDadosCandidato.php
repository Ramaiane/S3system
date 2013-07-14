<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidaDadosCandidato
 *
 * @author Fillipe
 */
class ValidaDadosCandidato {
    private $login;
    private $nomeCompleto;
    private $senha1;
    private $senha2;
    private $cpf;
    private $email;
    private $telefone;
    private $conclusao;
    public  $mensagens;
            
    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
    function validarGeral(){
        $this->checaCampos();
        $this->verificaSenha();
        $this->verificaCPF();
        $this->verificaEmail();      
    }
    function checaCampos(){
        if (!isset($this->login) || ($this->login=="") || 
            !isset($this->nomeCompleto) || ($this->nomeCompleto=="") ||
            !isset($this->senha1) || ($this->senha1=="") ||
            !isset($this->senha2) || ($this->senha2=="") ||
            !isset($this->cpf) || ($this->cpf=="") ||
            !isset($this->email) || ($this->email=="") ||
            !isset($this->telefone) || ($this->conclusao=="")){
            return false;
                /*header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
                echo "Espertinho. Informe todos os campos para prosseguir com cadastro!";
            exit;*/
        }
        return true;
    }
    function verificaEmail(){
	if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/", $this->email)) {
            /*header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Informe um email Valido para Prosseguir com o cadastro";
            exit;*/
            return false;
            
	}
        return true;
    }
    function verificaCPF(){
        
        
		
 		if(!is_numeric($this->cpf)) {
  			$status = false;
		} else {
   			# Pega o digito verificador
  			$dv_informado = substr($this->cpf, 9,2);

   			for($i=0; $i<=8; $i++) {
   				$digito[$i] = substr($this->cpf, $i,1);
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
					/*header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
                                        echo "Insira um CPF Válido!";
                                        exit;*/
                                    return false;
				}else return true;

	}
        
    
    function verificaSenha(){
        if($this->senha1 != $this->senha2){
            /*header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "As senhas informadas não batem";
            exit;*/
            return false;
        }
        return true;
    }
}

?>
