<?php

include_once("C:/wamp/www/S3_System/Modelo/Professor.php");
include_once("C:/wamp/www/S3_System/Modelo/ConexaoBanco.php");

if(isset($_POST['professor_nome']))
{$professor_nome = $_POST['professor_nome'];}

if(isset($_POST['professor_email']))
{$professor_email = $_POST['professor_email'];}

if(isset($_POST['professor_contatoTelefone']))
{$professor_contatoTelefone = $_POST['professor_contatoTelefone'];}

//tratamento
//Verificca se o campo nome está em branco
if (empty($professor_nome) OR strstr($professor_nome, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

//Verifica se o campo email está preenchido corretamente
//if(strlen($professor_email)<8 || strstr($professor_email, '@') == FALSE)
//{echo "Por favor, digite seu email corretamente.<br>"; $erro=1;}

//Verifica se não houve erro
if($erro==0)
{
/* Inicio da Conexao*/
$objConexaoBanco = new ConexaoBanco;
//parametros para conexao com o banco
$objConexaoBanco->set('db', 's3system');
$objConexaoBanco->set('host', 'localhost');
$objConexaoBanco->set('user', 's3system');       
$objConexaoBanco->set('pass', 'macaco');
$objConexaoBanco->set('sql', 'INSERT INTO `professor` WHERE professor_nome = "'.$professor_nome.'" AND professor_email = "'.$professor_email.'" AND professor_contatoTelefone = "'.$professor_contatoTelefone.'"');

$objConexaoBanco->conectar();
$objConexaoBanco->selecionarDB();
#$result = $objConexaoBanco->consulta();
}
?>
