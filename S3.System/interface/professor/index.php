<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>S3 System</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
   <!--  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>S3 System</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head> -->
    <body>

<div id="main_container">
    
        <div class="menu">
        	<ul>                                                                         
        		<li class="selected"><a href="#">Home</a></li>
                <li><a href="#">Editais</a></li>
                <li><a href="#">Informações</a></li>
                
        	</ul>
        </div>
        
    <div class="center_content">
    
     	<div class="center_left">
        	<div class="title_welcome"><span class="red">S3 System</span> Seleção de Alunos Especiais</div>
            <div class="welcome_box">
            <p class="welcome">
<span class="orange">Cadastro do Professor</span><br />
Por favor, preencha todos os campos abaixo.
			</p>
                <form name="cadastro" method="post" action="controleProfessor.php">
             <table>
                 <tr>
                     <td>Nome: </td><td><input type="text" name="professor_nome"/></td>
                 </tr>
                 <tr>
                     <td>Email: </td><td><input type="text" name="professor_email"/></td>
                 </tr>
                 <tr>
                     <td>Telefone: </td><td><input type="text" name="professor_telefone"/></td>
                 </tr>
                 <tr>
                     <td><br /><input type="submit" value="Cadastrar"/></td><td></td>
                 </tr>
             </table>
        </form>
            </div>
         
         <!-- <div class="features">   
            <div class="title">Main features</div>
            
                    <ul class="list">
                    <li><span>1</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    <li><span>2</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    <li><span>3</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    <li><span>4</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    </ul> 
         </div>  -->
         
        </div>
        
        <div class="center_right">
                
                        <div class="text_box">
                        <div class="title">Login</div>
                            <div class="login_form_row">
                            <label class="login_label">Login:</label><input type="text" name="name" class="login_input" />
                            </div>
                            
                            <div class="login_form_row">
                            <label class="login_label">Senha:</label><input type="password" name="pass" class="login_input" />
                            </div>                                     
                            <!--<input type="image" src="images/login.gif" class="login" />   -->                           
                        
                        </div>
                        
                         <!-- <div class="testimonials">
                        	<div class="title">Testimonials</div>
                            <div class="text_box">
                             <p class="testimonial">
                             “Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam”<br />
                             <strong>Edward Caloryd</strong>
                             
                             </p>
                            
                            </div>                                   
                        </div> -->
        
        </div>  
        
        <div class="clear"></div> 
    
    </div>    
 
    <div id="footer">                                              
        <div class="left_footer"><a href="#">S3 System, 2013</a> <a href="#">Reporte Um Erro</a></div>
        <div class="right_footer"><a href="http://csstemplatesmarket.com"  target="_blank"><img src="images/csstemplatesmarket.gif" border="0" alt="" title="" /></a>
        </div>   
    
    </div>    
    
</div>
</body>
</html>