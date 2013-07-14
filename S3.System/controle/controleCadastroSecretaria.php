<?php

/*
 * Arquivo de Controle para cadastro de Secretaria
 * Autor: FIllipe Feitosa
 * 
 */
include_once 'ConexaoBanco.php';
include_once 'ValidaDadosSecretaria.php';


$login = $_POST['login'];
$senha = $_POST['senha1'];

$objValidaNewSecretaria = new ValidaDadosSecretaria;


/** Verificação de Dados **/
if((!$objValidaNewSecretaria->checaCampoEmBranco($_POST['login']))||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['sigla'])||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['nomePrograma'])||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['senha1'])||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['senha2'])||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['responsavel'])||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['email'])||
!$objValidaNewSecretaria->checaCampoEmBranco($_POST['telefone'])){
  header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "Informe todos os campos para prosseguir com cadastro!";
              
}

/** Verificação de Senha **/

if(!$objValidaNewSecretaria->verificaSenha($_POST['senha1'], $_POST['senha2'])){
    header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "As senhas informadas sao invalidas";
}

/** Verifica Email **/

if(!$objValidaNewSecretaria->validaEmail($_POST['email'])){
     header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
     echo "Informe um email Valido para Prosseguir com o cadastro";
            
}

/** Verfica Se telefone é numerico **/

if(!$objValidaNewSecretaria->campoNumerico($_POST['telefone'])){
    header( "refresh:3;url=../interface/cadastro/cadastroSecretaria.php" ); 
            echo "Favor, atentar para campo numerico";
}

/** Verificação OK...Iniciando Cadastro no Banco**/

$objConexaoNewSecretaria = new ConexaoBanco;

  $objConexaoNewSecretaria = new ConexaoBanco;
  $objConexaoNewSecretaria->set('db', 's3system');
  $objConexaoNewSecretaria->set('host', 'localhost');
  $objConexaoNewSecretaria->set('user', 'root');       
  $objConexaoNewSecretaria->set('pass', '');
  $objConexaoNewSecretaria->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
  VALUES ('$login', '$senha', '2' )");  
    
  $objConexaoNewSecretaria->conectar();
  $objConexaoNewSecretaria->selecionarDB();
  $resultadoConsultaSecretaria = $objConexaoNewSecretaria->consulta();
  
  if ($resultadoConsultaSecretaria != 1) {
	
	
        echo "Erro no cadastro!";
        }else{
          header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Adicionado com Sucesso";
        }
  


?>
