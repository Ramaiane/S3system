<?php
include_once("../../controle/AcessoRestrito.php");
$objAcesso = new AcessoRestrito;
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', 1);
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
        		<li class="selected"><a href="#">Home</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Documenta&ccedil;&atilde;o</a></li>
                
        	</ul>
        </div>
        
    <div class="center_content">
    
     	<div class="center_left">
            <div class="title_welcome"><span class="red">S3 System</span> P&aacute;gina do Candidato.</div>
            <div class="welcome_box">
            <p class="welcome">
<span class="orange">Seja bem vindo candidato <?php echo $_SESSION['usuario_login']; ?> </span><br />
Este Sistema est&aacute; em desenvolvimento. Favor aguardar futuras releases. Por enquanto s&oacute; pode fazer logoff. 
			</p>
</br></br></br>   
            <a href="#" class="read_more">Logoff</a>          
            </div>
         
         
         
         
        <!-- <div class="features">   
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

         </div> 
         
         -->
           
            
            
        </div> 
        
        
        <div class="clear"></div> 
    
    </div>    

    
    <div id="footer">                                              
        <div class="left_footer"><a href="#">S3 System, 2013</a> <a href="#">Reporte Um Erro</a></div>
        <div class="right_footer"><a href="http://csstemplatesmarket.com"  target="_blank"><img src="images/csstemplatesmarket.gif" border="0" alt="" title="" /></a>
        </div>   
    
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>