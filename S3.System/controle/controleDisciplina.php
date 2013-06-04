<?php

include_once("C:/wamp/www/S3_System/Modelo/Disciplina.php");
include_once("C:/wamp/www/S3_System/Modelo/ConexaoBanco.php");

if(isset($_POST['denominacao']))
{$denominacao = $_POST['denominacao'];}

if(isset($_POST['orgao']))
{$orgao = $_POST['orgao'];}

if(isset($_POST['codigo']))
{$codigo = $_POST['codigo'];}

if(isset($_POST['nivel']))
{$nivel = $_POST['nivel'];}

if(isset($_POST['vigencia']))
{$vigencia = $_POST['vigencia'];}

if(isset($_POST['preRequisitos']))
{$preRequisitos = $_POST['preRequisitos'];}

if(isset($_POST['turma']))
{$turma = $_POST['turma'];}

if(isset($_POST['numeroVagas']))
{$numeroVagas = $_POST['numeroVagas'];}

if(isset($_POST['turno']))
{$turno = $_POST['turno'];}

if(isset($_POST['numeroCreditos']))
{$numeroCreditos = $_POST['numeroCreditos'];}

if(isset($_POST['horario']))
{$horario = $_POST['horario'];}

if(isset($_POST['ementa']))
{$ementa = $_POST['ementa'];}

if(isset($_POST['inscricao']))
{$inscricao = $_POST['inscricao'];}

//Tratamento
//Verificca se os campos estão em branco
if (empty($denominacao) OR strstr($denominacao, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($orgao) OR strstr($orgao, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($codigo) OR strstr($codigo, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($nivel) OR strstr($nivel, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($vigencia) OR strstr($vigencia, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($preRequisitos) OR strstr($preRequisitos, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($turma) OR strstr($turma, ' ') == FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($numeroVagas) OR strstr($numeroVagas, ' ') == FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($turno) OR strstr($turno, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($horario) OR strstr($horario, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($numeroCreditos) OR strstr($numeroCreditos, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($ementa) OR strstr($ementa, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}

if (empty($inscricao) OR strstr($inscricao, ' ') === FALSE)
{echo "Por favor, digite corretamente o campo.<br>"; $erro=1;}


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
$objConexaoBanco->set('sql', 'INSERT INTO `disciplina` WHERE denominacao = "'.$denominacao.'" AND orgao = "'.$orgao.'" AND codigo = "'.$codigo.'" AND  nivel= "'.$nivel.'" AND vigencia = "'.$vigencia.'" AND preRequisitos = "'.$preRequisitos.'" AND turma = "'.$turma.'"AND numeroVagas = "'.$numeroVagas.'"AND turno = "'.$turno.'"AND horario = "'.$horario.'" AND numeroCreditos = "'.$numeroCreditos.'" AND ementa = "'.$ementa.'"');


$objConexaoBanco->conectar();
$objConexaoBanco->selecionarDB();
#$result = $objConexaoBanco->consulta();
}
?>