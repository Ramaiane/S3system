<?php
//chamando Classes
include_once("../controle/ProcessaLogin.php");
include_once("../modelo/ConexaoBanco.php");

$login = $_POST['login'];
$senha = $_POST['senha'];
$usuario_tipo;
$idUsuario;

//verificação de campos em branco
$objProcessa = new ProcessaLogin;
$objProcessa->checaDados($login, $senha);

/* Inicio da Conexao*/
$objConexaoBanco = new ConexaoBanco;
//parametros para conexao com o banco
$objConexaoBanco->set('db', 's3system');
$objConexaoBanco->set('host', 'localhost');
$objConexaoBanco->set('user', 's3system');       
$objConexaoBanco->set('pass', 'macaco');
$objConexaoBanco->set('sql', 'SELECT * FROM `usuario` WHERE usuario_login = "'.$login.'" AND usuario_senha = "'.$senha.'"');

$objConexaoBanco->conectar();
$objConexaoBanco->selecionarDB();
$result = $objConexaoBanco->consulta();

if (mysql_num_rows($result) != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo "Login inválido!"; exit;
}else{

//agregando os resultados da consulta
            $resultadoConsulta=  mysql_fetch_array($result);
            echo $resultadoConsulta['idUsuario'];
            echo "</br>";
            echo $resultadoConsulta['usuario_login'];
            echo "</br>";
            echo $resultadoConsulta['usuario_tipo'];
            echo "</br>";
            
            $objProcessa->set('idUsuario', $resultadoConsulta['idUsuario']);
            $objProcessa->set('usuario_login', $resultadoConsulta['usuario_login']);
            $objProcessa->set('usuario_tipo', $resultadoConsulta['usuario_tipo']);
            
            $objProcessa->criaSessao();
            $objProcessa->redirecionaUsuario($resultadoConsulta['usuario_tipo']);
            
            
            echo "</br>tudo certo!";
            
                 
            
}

?>