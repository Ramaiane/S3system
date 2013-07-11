<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CandidatoDAO
 *
 * @author Fillipe
 */
include_once '../controle/ConexaoBanco.php';
class CandidatoDAO {
   
    public $conexao=null;
    //Método Construtor que inicializa uma conexao
    public function CandidatoDAO(){
        $this->conexao=new ConexaoBanco;
        
    }
    //Inserção no Banco (cadastro)
    function insereCandidato(Candidato $candidato){
        //Primeiro, pegar os dados do Object Candidato
        $login = $candidato->get('login');
        $senha = $candidato->get('senha');
        $nome = $candidato->get('nome');
        $cpf = $candidato->get('cpf');
        $email = $candidato->get('email');
        $telefone = $candidato->get('telefone');
        $conclusaoGraduacao = $candidato->get('dataConclusaoGraduacao');
        $tipo = $candidato->get('tipo');
        
        
        
        $controleInsere = $this->conexao;
        $controleInsere->set('db', 's3system');
        $controleInsere->set('host', 'localhost');
        $controleInsere->set('user', 's3system');
        $controleInsere->set('pass', 'macaco');
        $controleInsere->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
    VALUES ('$login', '$senha', '$tipo' )");
        
        $controleInsere->conectar();
        $controleInsere->selecionarDB();
        $result = $controleInsere->consulta();
        
        if ($result != 1) {
            echo "Erro no cadastro!";
        }
        
        $controleInsere->set('sql', "SELECT MAX(idUsuario) FROM usuario");
        $controleInsere->selecionarDB();
        $temp = $controleInsere->consulta();
       
        $retorna = max(mysql_fetch_array($temp));
        //$maxID = max($temp);
        
        //Inserção no tabela filha = Usuário  
        $controleInsere->set('sql', "INSERT INTO candidato (candidato_nome, idUsuario, candidato_cpf,
            candidato_email, candidato_telefone, candidato_dataConclusaoGraduacao) 
    VALUES ('$nome', '$retorna','$cpf', '$email','$telefone', '$conclusaoGraduacao' )");
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
    function atualizaCandidatoDados(Candidato $candidato){
        
        $id = $candidato->get('id');
        $login = $candidato->get('login');
        $senha = $candidato->get('senha');
        $nome = $candidato->get('nome');
        $cpf = $candidato->get('cpf');
        $email = $candidato->get('email');
        $telefone = $candidato->get('telefone');
        $dataConclusaoGraduacao = $candidato->get('dataConclusaoGraduacao');
        $dataAdmissaoGraduacao = $candidato->get('dataAdmissaoGraduacao');
        $instituicaoGraduacao = $candidato->get('instituicaoGraduacao');
        $cursoGraduacao = $candidato->get('cursoGraduacao');
        $tipo = $candidato->get('tipo');
        
        $controleAtualiza = $this->conexao;
        $controleAtualiza->set('sql', "UPDATE candidato SET candidato_nome = $nome,
                candidato_cpf = $cpf, candidato_email = $email,
                candidato_telefone = $telefone, candidato_instituicaoGraduacao = $instituicaoGraduacao,
                candidato_cursoGraduacao = $cursoGraduacao, candidato_dataAdmissaoGraduacao = $dataAdmissaoGraduacao, 
                candidato_dataConclusaoGraduacao = $dataConclusaoGraduacao WHERE idUsuario = $id");
        
        $controleAtualiza->conectar();
        $controleAtualiza->selecionarDB();
        
        $result = $controleAtualiza->consulta();
        
        if ($result != 1) {
            echo "Erro na atualização!";
        }else{
            header( "refresh0;url=../interface/candidato/index.html" );
            
            
        }
    }
        
        
        
        function atualizaLogin(Candidato $candidato){
             $id = $candidato->get('id');
             $login = $candidato->get('login');
             $senha = $candidato->get('senha');
             
             if(strlen($senha1) < 6){
                header( "refresh:2;url=../interface/candidato/index.html" ); 
                echo "Senha muito curta. Por favor informe uma senha de no minimo 6 caracteres";
                
            }
            if($senha1 != $senha2){
              header( "refresh:2;url=../interface/candidato/index.html" ); 
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
            header( "refresh0;url=../interface/candidato/index.html" );
            }
        }
        
    
    //Recuperação de dados (Listagem)
    function recuperaDadosCandidato(Candidato $candidato){
        $id = $candidato->get('id');
        $controleListagem = $this->conexao;
        
        $controleListagem->set('sql', "SELECT * FROM candidato WHERE idUsuario = $id");
        $controleListagem->conectar();
        $controleListagem->selcionarDB();
        
        $result = $controleListagem->consulta();
        
        if ($result != 1) {
            echo "Erro na Consulta!";
            }
        $recupera = mysqli_fetch_array($result);
        return $recupera;
         
        
    }
    //Remoção de Usuário (Deleção)
    function excluiCandidato(Candidato $candidato){
        $id = $candidato->get('id');
        
        $controleExcluiCandidato =  $this->conexao;
        $controleExcluiCandidato->set('sql', "DELETE FROM usuario WHERE idUsuario = $id");
    
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
