<?php

/*
 * Arquivo de Controle para cadastro de Secretaria
 * Autor: FIllipe Feitosa
 * 
 */
include_once 'ConexaoBanco.php';
include_once 'ValidaDados.php';

$login = $_POST['login'];
$senha = $_POST['senha1'];

$objValidaNewSecretaria = new ValidaDados;


/** Verificação de Dados **/
$objValidaNewSecretaria->checaCampoEmBranco($_POST['login']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['sigla']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['nomePrograma']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['senha1']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['senha2']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['responsavel']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['email']);
$objValidaNewSecretaria->checaCampoEmBranco($_POST['telefone']);

/** Verificação de Senha **/

$objValidaNewSecretaria->verificaSenha($_POST['senha1'], $_POST['senha2']);

/** Verifica Email **/

$objValidaNewSecretaria->validaEmail($_POST['email']);

/** Verfica Se telefone é numerico **/

$objValidaNewSecretaria->campoNumerico($_POST['telefone']);

/** Verificação OK...Iniciando Cadastro no Banco**/

$objConexaoNewSecretaria = new ConexaoBanco;

  $objConexaoNewSecretaria = new ConexaoBanco;
  $objConexaoNewSecretaria->set('db', 's3system');
  $objConexaoNewSecretaria->set('host', 'localhost');
  $objConexaoNewSecretaria->set('user', 's3system');       
  $objConexaoNewSecretaria->set('pass', 'macaco');
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
