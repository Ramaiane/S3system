<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>S3 System</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
   
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
                <span class="orange">Cadastro do Disciplinas</span><br />
                Por favor, preencha todos os campos abaixo.
            </p>
                <form name="cadastro" method="post" action="ConexaoBanco.php">
             <table>
                       <tr>
                            <td>Denominação:</td><td><input type="text" name="denominacaotxt"/></td>
                       </tr>
                       
                       <tr>
                           <td>Orgão:</td><td><input type="text" name="denominacaotxt"/></td>
                       </tr>
                       
                       <tr>
                           <td>Código:</td><td><input type="number" name=codigonumber""/></td>
                       </tr>
                       
                       <tr>
                            <td>Nível:</td><td><input type="text" name="niveltxt"/></td>
                       </tr>
                       
                       <tr>
                            <td>Período de vigência:</td><td><input type="text" name="vigenciatxt"/></td>
                       </tr>
                       
                       <tr>
                            <td>Pré Requisitos:</td><td><input type="text" name="preRequisitos"/></td>
                       </tr>
                       
                       <tr>
                            <td>Turma:</td><td><input type="text" name="turmatxt"/></td>
                       </tr>
                       
                       <tr>
                            <td>Número de vagas:</td><td><input type="number" name="numeroVagasnumber"/></td>
                       </tr>
                       
                       <tr>
                            <td>Turno:</td><td><input type="text" name="turnotxt"/></td>
                       </tr>
                       
                       <tr>
                            <td>Horário:</td><td><input type="text" name="horario"/></td>
                       </tr>
                     
                       <tr>
                            <td>Numero de créditos:</td><td><input type="text" name="numeroCreditos"/></td>
                       </tr>
                                            
                       <tr>
                            <td>Ementa:</td><td><input type="text" name="ementatxt"/></td>
                       </tr>
                       
                       <tr>
                            <td><br /><input type="submit" value="Cadastrar"/></td><td></td>
                       </tr>
             </table>
        </form>
     </div>        
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
                        
                        </div>  
        </div>  
        
        <div class="clear"></div> 
    
        </div>    
 
        <div id="footer">                                              
            <div class="left_footer"><a href="#">S3 System, 2013</a> <a href="#">Reporte Um Erro</a></div>
            <div class="right_footer"><a href="http://csstemplatesmarket.com"  target="_blank"><img src="images/csstemplatesmarket.gif" border="0" alt="" title="" /></a></div>           
        </div>    
        </div>
    </body>
</html>