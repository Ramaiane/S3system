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
    private $host;
    private $user;
    private $pass;
    private $db;
    private $sql;
    
    function conectar(){
        $con = mysql_connect($this->host, $this->user, $this->pass, 
        $this->db, $this->sql);
        return $con;
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
}


?>
