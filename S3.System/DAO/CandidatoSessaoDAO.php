<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CandidatoSessaoDAO
 *
 * @author Fillipe
 */
class CandidatoSessaoDAO {
    private $conexao = null;
    private $consulta = null;
    private $resultado = null;
    
            
    function CandidatoSessaoDAO(){
        $this->conexao = mysqli_connect("localhost", "s3system", "macaco", "s3system");
    }
    function encerraConexao(){
        mysqli_close($this->conexao);
        $this->conexao=null;
    }
    //entrar com a id gerada pelo controle de login
    function configuraSessaoCandidato($id){
        $this->consulta = "SELECT * FROM candidato, usuario WHERE usuario.idUsuario = $id";
        $this->resultado = mysqli_query($this->conexao, $this->consulta);
       
        if(!$this->resultado != 1){
            echo "algum tipo de erro na consulta com banco";
        }
        $temp = mysqli_fetch_array($this->resultado);
        echo "aqui vai teste";
        echo "</br>";
        echo $temp;
        echo "</br>";
        echo $temp['candidato_nome'];
        
        $_SESSION['candidato_nome']=  $temp['candidato_nome'];
        $_SESSION['candidato_cpf']=  $temp['candidato_cpf'];
        $_SESSION['candidato_email']=  $temp['candidato_email'];
        $_SESSION['candidato_telefone']=  $temp['candidato_telefone'];
        
        $this->encerraConexao();
    }
    
}

?>
