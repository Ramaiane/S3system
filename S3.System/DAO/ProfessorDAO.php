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
    
    function insereProfessor(Professor $professor){
        $login = $professor->get('login');
        $senha = $professor->get('senha');
        $professor_nome = $professor->get('professor_nome');
        $professor_email = $professor->get('professor_email');
        $professor_contatoTelefone = $professor->get('professor_contatoTelefone');
        $tipo = $professor->get('tipo'); //esse 'tipo' seria o tipo de usuário, certo?! então ñ deve ser diferenciado, neh?!
            
        $controleInsere = $this->conexao;
        $controleInsere->set('db', 's3system');
        $controleInsere->set('host', 'localhost');
        $controleInsere->set('user', 'root');
        $controleInsere->set('pass', '');
        $controleInsere->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
    VALUES ('$login', '$senha', '$tipo' )"); //esse insert, por ser sobre o login, deve permanecer como usuário?
        
        $controleInsere->conectar();
        $controleInsere->selecionarDB();
        $result = $controleInsere->consulta();
        
        if ($result != 1) {
            echo "Erro no cadastro!";
        }
        
        //Inserção no tabela filha = Usuário  -> Aqui que devo acrescentar a tabela professor?!
        $controleInsere->set('sql', "INSERT INTO professor (professor_nome, professor_cpf,
            professor_email, professor_telefone, professor_dataConclusaoGraduacao) 
    VALUES ('$professor_nome', '$professor_cpf', '$professor_email','$professor_telefone', '$professor_conclusaoGraduacao' )"); //especificar q é do professor?
        $result2 = $controleInsere->consulta();
        //adicionando e redirecionando para a página principal.
        if ($result2 != 1) {
	 echo "Erro no cadastro!";
        }else{
            header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Adicionado com Sucesso";
            $this->conexao=null;
        }
        
    }

    //Atualização de Dados no Banco (Update)
    function atualizaProfessorDados(Professor $professor){
        
        $id = $professor->get('id');
        $login = $professor->get('login');
        $senha = $professor->get('senha');
        $professor_nome = $professor->get('professor_nome');
        $professor_email = $professor->get('professor_email');
        $professor_contatoTelefone = $professor->get('professor_contatoTelefone');
        $tipo = $professor->get('tipo');
        
        $controleAtualiza = $this->conexao;
        $controleAtualiza->set('sql', "UPDATE professor SET professor_nome = $professor_nome,
                professor_email = $professor_email, professor_contatoTelefone = $professor_contatoTelefone,
                WHERE idProfessor = $id");
        
        $controleAtualiza->conectar();
        $controleAtualiza->selecionarDB();
        
        $result = $controleAtualiza->consulta();
        
        if ($result != 1) {
            echo "Erro na atualização!";
        }else{
            header( "refresh0;url=../interface/candidato/index.html" );
            
            
        }
    }
        
        
        
        function atualizaLogin(Professor $professor){
             $id = $professor->get('id');
             $login = $professor->get('login');
             $senha = $professor->get('senha');
             
             if(strlen($senha1) < 6){
                header( "refresh:2;url=../interface/candidato/index.html" ); 
                echo "Senha muito curta. Por favor informe uma senha de no minimo 6 caracteres";
                
            }
            if($senha1 != $senha2){
              header( "refresh:2;url=../interface/candidato/index.html" ); 
              echo "As senhas informadas não batem";
              
            }
             
             $controleAtualizaLogin = $this->conexao;
             $controleAtualizaLogin->set('sql', "UPDATE professor SET professor_login = $login, professor_senha = $senha 
                 WHERE idProfessor = $id");
             $controleAtualizaLogin->conectar();
             $controleAtualizaLogin->selecionarDB();
             $result = $controleAtualizaLogin->consulta();
             if ($result != 1) {
            echo "Erro na atualização!";
            }else{
            header( "refresh0;url=../interface/candidato/index.html" );
            }
        }
        
    
    //Recuperação de dados (Listagem)
    function recuperaDadosProfessor(Professor $professor){
        $id = $professor->get('id');
        $controleListagem = $this->conexao;
        
        $controleListagem->set('sql', "SELECT * FROM professor WHERE idProfessor");
    }
    //Remoção de Usuário (Deleção)
    function excluiProfessor(Professor $professor){
        $id = $professor->get('id');
        
        $controleExcluiCandidato =  $this->conexao;
        $controleExcluiCandidato->set('sql', "DELETE FROM professor WHERE idProfessor = $id");
    
        $controleExcluiCandidato->conectar();
        $controleExcluiCandidato->selecionarDB();
        
        $result2 = $controleExcluiCandidato->consulta();
       
        if ($result2 != 1) {
	 echo "Erro na operação!";
        }else{
            header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Removido com suscesso!";
            $this->conexao=null;
        }
        
        
    }
    
}

?>
