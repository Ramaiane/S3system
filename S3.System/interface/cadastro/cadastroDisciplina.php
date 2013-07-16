<?php
include_once("../../controle/AcessoRestrito.php");
$objAcesso = new AcessoRestrito;
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', 2);
$objAcesso->verificaAcesso();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>S3 System</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body>

<div id="main_container">
    <!--
    <div id="header">
    	<div class="logo"><img src="" border="0" alt="" title="" /></div>       
    </div>
   
    -->
        <div class="menu">
        	<ul>                                                                         
        	<li class="selected"><a href="../interface/index.html">Home</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Documenta&ccedil;&atilde;o</a></li>
                
        	</ul>
        </div>
        
    <div class="center_content">
    
     	<div class="center_left">
            <p <div class="title_welcome"><span class="red">Formul&aacute;rio</span> de Cadastro de Disciplina</div>
            
            <p class="welcome">
       <span class="orange">Preencha adequadamente todas as informa&ccedil;&otilde;es abaixo: </span><br />
       
<form action="../../controle/controleCadastroDisciplina.php" method="post"></br>
    </br></br><label class="login_label">Disciplina:</label><input type="text" name="nome" class="login_input" required/> 
    </br></br><label class="login_label">Descri&ccedil;&atilde;o:</label><input type="text" name="descricao" class="login_input" required/> 
    </br></br><label class="login_label">Codigo:</label><input type="text" name="codigo" class="login_input" required/> 
    </br></br><label class="login_label">Vagas:</label><input type="number" name="vagas" class="login_input" required/> 
     
    </br>
    
    <input type="image" src="../../interface/images/botaoCadastrar.gif" class="login" />
    
</form>
 
            </p>
            </p>
          <!-- <a href="#" class="read_more">Leia Mais</a> -->         
          
        
         
            
            
         <!--
         <div class="features">   
            <div class="title">Latest News</div>
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>   
                </div>
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>   
                </div>       

         
         