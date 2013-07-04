<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecretariaDAO
 *
 * @author Carol
 */

include_once '../controle/ConexaoBanco.php';

class SecretariaDAO {
      //Método Construtor que inicializa uma conexao
    public $conexao=null;
    
    public function SecretariaDAO(){
        $this->conexao=new ConexaoBanco;
        
    }
    //Inserção no Banco de Dados(cadastro)
    function insereSecretaria(Secretaria $secretaria){
        
        $login = $secretaria->get('login');
        $sigla = $secretaria->get('sigla');
        $nomePrograma = $secretaria->get('nomePrograma');
        $responsavel = $secretaria->get('responsavel');
        $telefone = $secretaria->get('telefone');
        $email = $secretaria->get('email'); 
        $senha1 = $secretaria->get('senha1');
        $senha2 = $secretaria->get('senha2');
        $tipo = $secretaria->get('tipo');
        
        
        
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
        
        //Inserção no tabela filha = Usuário  
        $controleInsere->set('sql', "INSERT INTO secretaria (secretaria_sigla, secretaria_nomePrograma,
            secretaria_responsavel, secretaria_telefone, secretaria_email) 
    VALUES ('$sigla', '$nomePrograma', '$responsavel','$telefone', '$email' )");
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
    function updateLogin(Secretaria $secretaria, $senha1, $senha2){
         
             $id = $secretaria->get('id');
             $login = $secretaria->get('login');
             $senha = $secretaria->get('senha');
             
             if(strlen($senha1) < 6){
                header( "refresh:2;url=../interface/secretaria/index.html" ); 
                echo "Senha muito curta. Por favor informe uma senha de no minimo 6 caracteres";
                
            }
            if($senha1 != $senha2){
              header( "refresh:2;url=../interface/secretaria/index.html" ); 
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
            header( "refresh0;url=../interface/secretaria/index.html" );
            }
    }
    
    function updateSecretaria(Secretaria $secretaria){
        
        $sigla = $secretaria->get('sigla');
        $nomePrograma = $secretaria->get('nomePrograma');
        $responsavel = $secretaria->get('responsavel');
        $telefone = $secretaria->get('telefone');
        $email = $secretaria->get('email');
        $id = $secretaria->get('id');
        $enderecoLogo = $secretaria->get('enderecoLogo');
        
        $controleAtualiza = $this->conexao;
    
        $controleAtualiza->set('sql', "UPDATE secretaria SET secretaria_sigla= $sigla , secreataria_emailContato= $email, secretaria_nomeProgrma = '$nomePrograma' 
        secretaria_responsavel = $responsavel, secretaria_telefoneContato = $telefone, secretaria_enderecoLogo = $enderecoLogo WHERE idUsuario='$id'");
        $controleAtualiza->conectar();
        $controleAtualiza->selecionarDB();
   
      $result = $controleAtualiza->consulta();
    if ($result != 1) {
            echo "Erro na atualização!";
        }else{
            header( "refresh0;url=../interface/secretaria/index.html" );
            
            
        }
    }
    
    //Recuperação de dados (Listagem)
    function recuperaDadosSecretaria(Secretaria $secretaria){
        
        $id = $secretaria->get('id');
        $controleListagem = $this->conexao;
        $controleListagem->set('sql', "SELECT * FROM secretaria WHERE idUsuario = $id");
        
       
       
    }
    function deleteSecretaria(Secretaria $secretaria){
        
         $id = $secretaria->get('id');
        
        $controleExcluiSecretaria =  $this->conexao;
        $controleExcluiSecretaria->set('sql', "DELETE FROM usuario WHERE idUsuario = $id");
    
        $controleExcluiSecretaria->conectar();
        $controleExcluiSecretaria->selecionarDB();
        
        $result2 = $controleExcluiSecretaria->consulta();



    if ($result2 != 1) {
	 echo "Erro na operação!";
        }else{
            header( "refresh:3;url=../interface/index.html" );
            echo "Usuario Removido";
            $this->conexao=null;
        }


    }
    
}

?>
