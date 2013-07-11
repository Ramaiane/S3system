<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexaoBanco
 * Esta classe serve de modelo para as interacoes com banco do sistema
 * procurar por metodos de get e set
 *
 * @author Fillipe
 */
class ConexaoBanco {
    private $host = 'localhost';
    private $user = 's3system';
    private $pass = 'macaco';
    private $db = 's3system';
    private $sql;
    private $con;
    function conectar(){
        if($this->con == NULL){
        $this->con = mysql_connect($this->host, $this->user, $this->pass, $this->db);
        }
        return $this->con;
    }
    function selecionarDB(){
        $sel = mysql_select_db($this->db) or die($this->erro(mysql_error()));
        if($sel){
            return true;
        }else{
            return FALSE;
        } 
     }
     function consulta(){
         $consulta = mysql_query($this->sql) or die ($this->erro(mysql_error()));
         return $consulta;
     }
     function set($prop, $value){
         $this->$prop = $value;
     }
     function getSQL(){
         return $this->sql;
     }
     function erro($erro){
         echo $erro;
     }
     function encerraConexao(){
         mysql_close($this->con);
     }
}


?>
