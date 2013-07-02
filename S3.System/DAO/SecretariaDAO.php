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
        $controleInsere->set('user', 's3system');
        $controleInsere->set('pass', ' ');
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
}

?>
