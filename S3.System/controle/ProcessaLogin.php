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
include_once("../modelo/Usuario.php");
class ProcessaLogin {
   
   public $usuario = null;
   
   function ProcessaLogin(){
       $this->usuario = new Usuario;
   }
   function setUsuario(Usuario $usuario){
       $this->usuario = $usuario;
   }
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
            $_SESSION['idUsuario'] = $this->usuario->get('id');
            $_SESSION['usuario_login'] = $this->usuario->get('login');
            $_SESSION['usuario_tipo'] = $this->usuario->get('tipo');
       
        
    }
    function redirecionaUsuario(){
        
     
            if($this->usuario->get('tipo')==1){
                header("Location:../interface/candidato/index.php");
            }if($this->usuario->get('tipo')==2){
                header("Location:../interface/secretaria/index.php");
            }if($this->usuario->get('tipo')==3){
                 header("Location:../interface/professor/index.php");
            }
    }
    function logoff(){
        session_destroy();
        header('../interface/index.html');
    }
  
}



?>
