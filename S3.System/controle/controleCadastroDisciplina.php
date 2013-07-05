<?php
include_once("AcessoRestrito.php");
$objAcesso = new AcessoRestrito;
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', 2);
$objAcesso->verificaAcesso();

include_once("ConexaoBanco.php");
include_once 'ValidaDados.php';

$login = $_POST['login'];
$senha = $_POST['senha1'];

/** Verificação de Dados **/
$objValidaNewDisciplina = new ValidaDados;
$objValidaNewDisciplina->checaCampoEmBranco($_POST['login']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['senha']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['disciplina_']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['denominacao']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['orgao']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['codigo']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['nivel']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['vigencia']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['preRequisitos']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['turma']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['numeroVagas']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['turno']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['horario']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['numeroCreditos']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['ementa']);
$objValidaNewDisciplina->checaCampoEmBranco($_POST['inscricao']);

$objValidaNewDisciplina->campoNumerico($_POST['codigo']);
$objValidaNewDisciplina->campoNumerico($_POST['numeroVagas']);
$objValidaNewDisciplina->campoNumerico($_POST['horario']);
$objValidaNewDisciplina->campoNumerico($_POST['numeroCreditos']);
$objValidaNewDisciplina->campoNumerico($_POST['inscricao']);

/** Verificação OK...Iniciando Cadastro no Banco **/ 
$objConexaoNewDisciplina = new ConexaoBanco;
$objConexaoNewDisciplina->set('db', 's3system');
$objConexaoNewDisciplina->set('host', 'localhost');
$objConexaoNewDisciplina->set('user', 'root');       
$objConexaoNewDisciplina->set('pass', '');
$objConexaoNewDisciplina->set('sql', "INSERT INTO usuario (usuario_login, usuario_senha, usuario_tipo) 
                          VALUES ('$login', '$senha', '2' )");  


$objConexaoNewDisciplina->conectar();
$objConexaoNewDisciplina->selecionarDB();
$resultadoConsultaDisciplina = $objConexaoNewDisciplina->consulta();

if ($resultadoConsultaDisciplina != 1) {
        echo "Erro no cadastro!";
        }else{
          header( "refresh:3;url=../interface/index.html" );
            echo "Disciplina Adicionada com Sucesso";
        }

?>
