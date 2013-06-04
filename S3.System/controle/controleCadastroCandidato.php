<?php

/*
 * Arquivo de Controle para criação de usuário do tipo = 1 (Candidatos)
 * Autor: Fillipe Feitosa
 */
include_once("../modelo/ConexaoBanco.php");
include_once 'ValidaDadosCandidato.php';
    
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
    
    
        
    
    
?>
