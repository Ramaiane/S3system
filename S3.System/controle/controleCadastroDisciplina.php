<?php
include_once("AcessoRestrito.php");
$objAcesso = new AcessoRestrito;
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', 2);
$objAcesso->verificaAcesso();

include_once 'ValidaDados.php';
include_once '../DAO/DisciplinaDAO.php';
include_once '../modelo/Disciplina.php';

/** Verificação de Dados **/
$objValidaNewDisciplina = new ValidaDadosDisciplina;

if(
!$objValidaNewDisciplina->checaCampoEmBranco($_POST['nome'])||
!$objValidaNewDisciplina->checaCampoEmBranco($_POST['descricao'])||
!$objValidaNewDisciplina->checaCampoEmBranco($_POST['codigo'])||
!$objValidaNewDisciplina->checaCampoEmBranco($_POST['vagas'])
){
     header( "refresh:3;url=../interface/cadastro/cadastroCandidato.php" ); 
            echo "Informe todos os campos para prosseguir com cadastro!";
}

/** Verificação OK...Iniciando Cadastro no Banco **/ 
$newDisciplina = new Disciplina;

$newDisciplina->set('nome', $_POST['nome']);
$newDisciplina->set('descricao', $_POST['descricao']);
$newDisciplina->set('codigo', $_POST['codigo']);
$newDisciplina->set('vagas', $_POST['vagas']);
$newDisciplina->set('professor', $_POST['professor']);




?>
