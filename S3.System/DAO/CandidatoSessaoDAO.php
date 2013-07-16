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
        $this->conexao = mysql_connect("localhost", "s3system", "macaco", "s3system");
    }
    function encerraConexao(){
        mysqli_close($this->conexao);
        $this->conexao=null;
    }
    //entrar com a id gerada pelo controle de login
    function configuraSessaoCandidato($id){
        $this->consulta = "SELECT * FROM candidato, usuario WHERE idUsuario = $id";
        $this->resultado = mysql_query($this->consulta, $this->conexao);
        
        
    }
    
}

?>
