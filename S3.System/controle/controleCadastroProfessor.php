<?php

include_once("AcessoRestrito.php");
$objAcesso = new AcessoRestrito;
$objAcesso->iniciaSessao();
$objAcesso->set('usuario_tipo', 2);
$objAcesso->verificaAcesso();

include_once 'ValidaDados.php';
include_once '../DAO/ProfessorDAO.php';
include_once '../modelo/Professor.php';

$login = $_POST['login'];
$senha = $_POST['senha1'];

$objValidaNewProfessor = new ValidaDados;
/** Verificação de Dados * */
if (!$objValidaNewProfessor->checaCampoEmBranco($_POST['login']) ||
        !$objValidaNewProfessor->checaCampoEmBranco($_POST['nomeCompleto']) ||
        !$objValidaNewProfessor->checaCampoEmBranco($_POST['email']) ||
        !$objValidaNewProfessor->checaCampoEmBranco($_POST['senha1']) ||
        !$objValidaNewProfessor->checaCampoEmBranco($_POST['senha2']) ||
        !$objValidaNewProfessor->checaCampoEmBranco($_POST['telefone'])) {
    header("refresh:3;url=../interface/cadastro/cadastroProfessor.php");
    echo "Informe todos os campos para prosseguir com cadastro!";
}
/** Verificação de Senha * */
if (!$objValidaNewProfessor->verificaSenha($_POST['senha1'], $_POST['senha2'])) {
    header("refresh:3;url=../interface/cadastro/cadastroCandidato.php");
    echo "As senhas sao invalidas";
}
/** Verifica Email * */
if (!$objValidaNewProfessor->validaEmail($_POST['email'])) {
    header("refresh:3;url=../interface/cadastro/cadastroCandidato.php");
    echo "Informe um email Valido para Prosseguir com o cadastro";
}
/** Verfica Se telefone é numerico * */
if (!$objValidaNewProfessor->campoNumerico($_POST['telefone'])) {
    header("refresh:3;url=../interface/cadastro/cadastroCandidato.php");
    echo "Favor, atentar para campo numerico";
}
/** Verificação OK...Iniciando Cadastro no Banco* */
$newProfessor = new Professor;
$newProfessorDAO = new ProfessorDAO;

$newProfessor->set('login', $_POST['login']);
$newProfessor->set('professor_nome', $_POST['nomeCompleto']);
$newProfessor->set('senha', $_POST['senha1']);
$newProfessor->set('professor_email', $_POST['email']);
$newProfessor->set('professor_contatoTelefone', $_POST['telefone']);
$newProfessor->set('professor_email', $_POST['email']);

if (null == $newProfessorDAO->insereProfessor($newProfessor)) {
    header("refresh:3;url=../interface/secretaria/index.php");
    
}
?>
