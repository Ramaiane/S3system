<?php

/**
 * Description of AcessoRestrito
 * Classe para manipulação de acessos. Deve ser instanciada logo no começo do
 * arquivo.
 * Todas as páginas de usários logados devem seguir o modelo
 * a seguir:
<?php
include_once("../../controle/AcessoRestrito.php");
$objAcesso = new AcessoRestrito; 
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', "NIVEL NECESSARIO");
$objAcesso->verificaAcesso();
?>
 * @author Fillipe
 */
class AcessoRestrito {
    private $usuario_tipo;
    
    function set($prop, $value){
        $this->$prop = $value;
    }  
    function iniciaSessao(){
        if (!isset($_SESSION)) session_start();
    }
    function verificaAcesso(){
        if (!isset($_SESSION['idUsuario']) OR ($_SESSION['usuario_tipo'] =!$this->usuario_tipo)) {
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: ../../index.php"); exit;
        }
        
    }
    function logoff(){
        session_destroy();
        header('../interface/index.html');
    }
}

?>
