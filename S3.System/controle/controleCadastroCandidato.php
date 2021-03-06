<?php

/*
 * Arquivo de Controle para criação de usuário do tipo = 1 (Candidatos)
 * Autor: Fillipe Feitosa
 */

include_once 'ValidaDadosCandidato.php';
include_once '../modelo/Candidato.php';
include_once '../DAO/CandidatoDAO.php';
    
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
    
    //$objValida->validarGeral();
    
    if( !$objValida->checaCampos()){
        header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Espertinho. Informe todos os campos para prosseguir com cadastro!";
    }
            
        if(!$objValida->verificaSenha()){
            header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "As senhas informadas não batem";
            
        }
        if(!$objValida->verificaCPF()){
            header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Insira um CPF Válido!";
        }
        if(!$objValida->verificaEmail()){
            header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Informe um email Valido para Prosseguir com o cadastro";
            
        }
    
    
/**   
    //Inicio do Cadastro, em conjunto com a nexão do Banco
    $objNovaConexaoBanco = new ConexaoBanco;
    $objNovaConexaoBanco->set('db', 's3system');
    $objNovaConexaoBanco->set('host', 'localhost');
    $objNovaConexaoBanco->set('user', 's3system');       
    $objNovaConexaoBanco->set('pass', 'macaco');
    $objNovaConexaoBanco->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
    VALUES ('$login', '$senha', '1' )");   
    
    $objNovaConexaoBanco->conectar();
    
    $objNovaConexaoBanco->selecionarDB();
    $result = $objNovaConexaoBanco->consulta();
    
    if ($result != 1) {
	
	
        echo "Erro no cadastro!";
}else{
    header( "refresh:3;url=../interface/index.html" );
    echo "Usuario Adicionado com Sucesso";
}
   */
    
    //Nova Estrutura Usando DAO
    $newCandidato = new Candidato;
    $newCandidatoDAO = new CandidatoDAO;
    
    $newCandidato->set('login', $_POST['login']);
    $newCandidato->set('nome', $_POST['nomeCompleto']);
    $newCandidato->set('senha', $_POST['senha1']);
    $newCandidato->set('cpf', $_POST['cpf']);
    $newCandidato->set('email', $_POST['email']);
    $newCandidato->set('telefone', $_POST['telefone']);
    $newCandidato->set('conclusao', $_POST['conclusao']);
    
  if(null==$newCandidatoDAO->insereCandidato($newCandidato)){
         header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Adicionado com Sucesso";
    }
    
    
?>
