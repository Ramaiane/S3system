<?php

include_once("../../../modelo/Secretaria.php");
include_once("../../../../modelo/ConexaoBanco.php");

if(isset($_POST['sigla']))
{$sigla = $_POST['sigla'];}

if(isset($_POST['nomePrograma']))
{$nomePrograma = $_POST['nomePrograma'];}

if(isset($_POST['responsavel']))
{$responsavel = $_POST['responsavel'];}

if(isset($_POST['enderecoLogo']))
{$enderecoLogo = $_POST['enderecoLogo'];}

if(isset($_POST['telefoneContato']))
{$telefoneContato =  $_POST['telefoneContato'];}

if(isset($_POST['emailContato']))
{$emailContato = $_POST['emailContato'];}

if(isset($_POST['dataRegistro']))
{$dataRegistro = $_POST['dataRegistro'];}


//Verificca se o campos estão em branco
if (empty($sigla) OR strstr($sigla, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

if (empty($nomePrograma) OR strstr($nomePrograma, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

if (empty($responsavel) OR strstr($responsavel, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

if (empty($enderecoLogo) OR strstr($enderecoLogo, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

if (empty($dataRegistro) OR strstr($dataRegistro, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

if (empty($emailContato) OR strstr($emailContato, '') == FALSE)
{echo "Por favor, digite seu nome corretamente.<br>"; $erro=1;}

if (empty($telefoneContato) OR strstr($telefoneContato, '') == FALSE)
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
$objConexaoBanco->set('pass', '');
$objConexaoBanco->set('sql', 'INSERT INTO `secretaria` WHERE sigla = "'.$sigla.'" AND nomePrograma = "'.$nomePrograma.'" 
    AND responsavel = "'.$responsavel.'" AND enderecoLogo = "'.$enderecoLogo.'" AND telefoneContato = "'.$telefoneContato.'" AND emailContato = "'.$emailContato.'" AND dataRegistro = "'.$dataRegistro.'"');

$objConexaoBanco->conectar();
$objConexaoBanco->selecionarDB();
#$result = $objConexaoBanco->consulta();
}
		
?>
