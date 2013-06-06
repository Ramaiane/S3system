<?php
include_once("AcessoRestrito.php");
$objAcesso = new AcessoRestrito;
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', 2);
$objAcesso->verificaAcesso();

include_once("../modelo/ConexaoBanco.php");
include_once 'ValidaDados.php';

$login = $_POST['login'];
$senha = $_POST['senha1'];

$objValidaNewProfessor = new ValidaDados;
/** Verificação de Dados **/
$objValidaNewProfessor->checaCampoEmBranco($_POST['login']);
$objValidaNewProfessor->checaCampoEmBranco($_POST['nomeCompleto']);
$objValidaNewProfessor->checaCampoEmBranco($_POST['email']);
$objValidaNewProfessor->checaCampoEmBranco($_POST['senha1']);
$objValidaNewProfessor->checaCampoEmBranco($_POST['senha2']);
$objValidaNewProfessor->checaCampoEmBranco($_POST['telefone']);
/** Verificação de Senha **/
$objValidaNewProfessor->verificaSenha($_POST['senha1'], $_POST['senha2']);
/** Verifica Email **/
$objValidaNewProfessor->validaEmail($_POST['email']);
/** Verfica Se telefone é numerico **/
$objValidaNewProfessor->campoNumerico($_POST['telefone']);
/** Verificação OK...Iniciando Cadastro no Banco**/
$objConexaoNewProfessor = new ConexaoBanco;
$objConexaoNewProfessor->set('db', 's3system');
$objConexaoNewProfessor->set('host', 'localhost');
$objConexaoNewProfessor->set('user', 's3system');       
$objConexaoNewProfessor->set('pass', 'macaco');
$objConexaoNewProfessor->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
  VALUES ('$login', '$senha', '3' )");  

$objConexaoNewProfessor->conectar();
$objConexaoNewProfessor->selecionarDB();
$resultadoConsultaProfessor = $objConexaoNewProfessor->consulta();

if ($resultadoConsultaProfessor != 1) {
	
	
        echo "Erro no cadastro!";
        }else{
          header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Adicionado com Sucesso";
        }


?>
