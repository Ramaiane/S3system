<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../controle/ConexaoBanco.php';

class ProfessorDAO {

    public $conexao = null;
    public function ProfessorDAO() {
        $this->conexao = new ConexaoBanco;
    }
    function insereProfessor(Candidato $professor){

    $login = $professor->get('usuario_login');
    $senha = $professor->get('usuario_senha');
    $tipo = $professor->get('tipo');
    $nome = $professor->get('professor_nome');
    $email = $professor->get('professor_email');
    $telefone = $professor->get('professor_contatoTelefone');
    
        $controleInsere = $this->conexao;
        $controleInsere->set('db', 's3system');
        $controleInsere->set('host', 'localhost');
        $controleInsere->set('user', 'root');
        $controleInsere->set('pass', '');
        $controleInsere->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
    VALUES ('$login', '$senha', '$tipo' )");
    
        $controleInsere->conectar();
        $controleInsere->selecionarDB();
        $result = $controleInsere->consulta();
        
        if ($result != 1) {
            echo "Erro no cadastro!";
    }

    $controleInsere-> set('sql', "INSERT INTO professor (idProfessor, idUsuario, idSecretaria,
        professor_nome, professor_email, professor_contatoTelefone)
        VALUES ('$temp1', '$temp2','$temp3', '$nome','$email', '$telefone' )");
            $result2 = $controleInsere->consulta();
        //adicionando e redirecionando para a página principal.
        if ($result2 != 1) {
	 echo "Erro no cadastro!";
        }else{
            //header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Adicionado com Sucesso";
            $this->conexao=null;
        }        
    }
        //Atualização de Dados no Banco (Update)
    function atualizaDadosProfessor(Candidato $professor){
        
        $id = $professor->get('id');
        $login = $professor->get('login');
        $senha = $professor->get('senha');
        $nome = $professor->get('professor_nome');
        $email = $professor->get('professor_email');
        $telefone = $professor->get('professor_contatoTelefone');
        $tipo = $professor->get('tipo');
        
        $controleAtualiza = $this->conexao;
        $controleAtualiza->set('sql', "UPDATE professor SET professor_nome = $nome,
                professor_email = $email, professor_contatoTelefone = $telefone WHERE idProfessor = $id");
        
        $controleAtualiza->conectar();
        $controleAtualiza->selecionarDB();
        
        $result = $controleAtualiza->consulta();
        
        if ($result != 1) {
            echo "Erro na atualização!";
        }else{
            header( "refresh0;url=../interface/professor/index.html" );            
        }
    }
    
    function atualizaLogin(Candidato $professor){
             $id = $professor->get('id');
             $login = $professor->get('login');
             $senha = $professor->get('senha');
             
             if(strlen($senha1) < 6){
                header( "refresh:2;url=../interface/professor/index.html" ); 
                echo "Senha muito curta. Por favor informe uma senha de no minimo 6 caracteres";
                
            }
            if($senha1 != $senha2){
              header( "refresh:2;url=../interface/professor/index.html" ); 
              echo "As senhas informadas não batem";
              
            }
             
             $controleAtualizaLogin = $this->conexao;
             $controleAtualizaLogin->set('sql', "UPDATE usuario SET usuario_login = $login, usuario_senha = $senha 
                 WHERE idUsuario = $id");
             $controleAtualizaLogin->conectar();
             $controleAtualizaLogin->selecionarDB();
             $result = $controleAtualizaLogin->consulta();
             if ($result != 1) {
            echo "Erro na atualização!";
            }else{
            header( "refresh0;url=../interface/professor/index.html" );
            }
        } 
        
    function recuperaDadosProfessor(Candidato $professor){
        $id = $professor->get('id');
        $controleListagem = $this->conexao;
        
        $controleListagem->set('sql', "SELECT * FROM professor WHERE idProfessor");
    }
    function excluiProfessor(Candidato $professor){
        $id = $professor->get('id');
        
        $controleExcluiProfessor =  $this->conexao;
        $controleExcluiProfessor->set('sql', "DELETE FROM professor WHERE idProfessor = $id");
    
        $controleExcluiProfessor->conectar();
        $controleExcluiProfessor->selecionarDB();
        
        $result2 = $controleExcluiProfessor->consulta();
       
        if ($result2 != 1) {
	 echo "Erro na operação!";
        }else{
            header( "refresh:3;url=../interface/index.html" );
            echo "PProfessor removido com suscesso!";
            $this->conexao=null;
        }
    }
}

?>