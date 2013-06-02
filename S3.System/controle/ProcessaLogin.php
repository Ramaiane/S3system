<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProcessaLogin
 *
 * @author Fillipe
 */
class ProcessaLogin {
   
   private $idUsuario;
   private $usuario_login;
   private $usuario_tipo;
    
    function checaDados($login, $senha){
   
            if(!isset($login) || $login = ""){
                header("Location: ../index.php"); exit; 
            }
                if(!isset($senha) || $senha = ""){
                    header("Location: ../index.php");exit;             
                }    
    }
    
    function set($prop, $value){
         $this->$prop = $value;
     }   
    function criaSessao(){
             
            if(!isset($_SESSION))session_start ();
            $_SESSION['idUsuario'] = $this->idUsuario;
            $_SESSION['usuario_login'] = $this->usuario_login;
            $_SESSION['usuario_tipo'] = $this->usuario_tipo;
        
        
    }
    function redirecionaUsuario(){
        
     
            if($this->usuario_tipo==1){
                header("Location:../interface/candidato/index.php");
            }if($this->usuario_tipo==2){
                header("Location:../interface/secretaria/index.php");
            }if($this->usuario_tipo==3){
                 header("Location:../interface/professor/index.php");
            }
    }
    
  
}



?>
