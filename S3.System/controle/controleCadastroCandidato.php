<?php

/*
 * Arquivo de Controle para criação de usuário do tipo = 1 (Candidatos)
 * Autor: Fillipe Feitosa
 */
include_once("../modelo/ConexaoBanco.php");
include_once 'ValidaDadosCandidato.php';
    
    $login = $_POST['login'];
    $senha = $_POST['senha1'];
        
    $objValida = new ValidaDadosCandidato;
    
    $objValida->set('login', $_POST['login']);
    $objValida->set('nomeCompleto', $_POST['nomeCompleto']);
    $objValida->set('senha1', $_POST['senha1']);
    $objValida->set('senha2', $_POST['senha2']);
    $objValida->set('cpf', $_POST['cpf']);
    $objValida->set('email', $_POST['email']);
    $objValida->set('telefone', $_POST['telefone']);
    $objValida->set('conclusao', $_POST['conclusao']);
    
    $objValida->validarGeral();
    
    echo "passou tranquilo!";
    //Inicio do Cadastro, em conjunto com a nexão do Banco
    $objNovaConexaoBanco = new ConexaoBanco;
    $objNovaConexaoBanco->set('db', 's3system');
    $objNovaConexaoBanco->set('host', 'localhost');
    $objNovaConexaoBanco->set('user', 's3system');       
    $objNovaConexaoBanco->set('pass', 'macaco');
    $objNovaConexaoBanco->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
    VALUES ($login, $senha, '1' )");   
    
    $objNovaConexaoBanco->conectar();
    
    $objNovaConexaoBanco->selecionarDB();
    $result = $objNovaConexaoBanco->consulta();
    
    if ($result != 1) {
	
	header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" );
        echo "Cadastro Realizado com sucesso!";
}else{
    echo "Usuario Adicionado com Sucesso";
}
    
?>
