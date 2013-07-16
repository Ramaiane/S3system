<?php

/**
 * Description of DisciplinaDAO
 *
 * @author tainarareis
 */
include_once '../controle/ConexaoBanco.php';

class DisciplinaDAO {

    public $conexao = null;

    //Método Construtor que inicializa uma conexao
    public function DisciplinaDAO() {
        $this->conexao = new ConexaoBanco;
    }

    public function resetaConexao() {
        $this->conexao = null;
    }

    //Inserção no Banco (cadastro)
      function insereDisciplina(Disciplina $disciplina) {

        //Primeiro, pegar os dados do Object Disciplina
        //
        //$idDisciplina = $disciplina->get('idDisciplina');
        $idProfessor = $disciplina->get('idProfessor');
        $idEdital = $disciplina->get('idEdital');
        // $login = $disciplina->get('login');
        // $senha = $disciplina->get('senha');
        $disciplina_ = $disciplina->get('disciplina_');
        $denominacao = $disciplina->get('denominacao');
        $orgao = $disciplina->get('orgao');
        $codigo = $disciplina->get('codigo');
        $nivel = $disciplina->get('nivel');
        $vigencia = $disciplina->get('vigencia');
        $preRequisitos = $disciplina->get('preRequisitos');
        $turma = $disciplina->get('turma');
        $numeroVagas = $disciplina->get('numeroVagas');
        $turno = $disciplina->get('turno');
        $horario = $disciplina->get('horario');
        $numeroCreditos = $disciplina->get('numeroCreditos');
        $ementa = $disciplina->get('ementa');
        $inscricao = $disciplina->get('inscricao');


        $controleInsere = $this->conexao;
        $controleInsere->set('db', 's3system');
        $controleInsere->set('host', 'localhost');
        $controleInsere->set('user', 'root');
        $controleInsere->set('pass', '');



        $controleInsere->conectar();
        $controleInsere->selecionarDB();
        $result = $controleInsere->consulta();


        if ($result != 1) {
            echo "Erro no cadastro!";
        }

        $controleInsere->set('sql', "INSERT INTO disciplina ( idProfessor, idEdital, disciplina_, 
            denominacao, orgao, codigo, nivel, vigencia, preRequisitos, turma, numeroVagas, turno, horario, 
            numeroCreditos, ementa, inscricao)
            VALUES ('$idProfessor', '$idEdital', '$disciplina_', '$denominacao', '$orgao', 
            '$codigo','$nivel', '$vigencia', '$preRequisitos','$turma', '$numeroVagas', '$turno', '$horario',
            '$numeroCreditos', '$ementa', '$inscricao'");
        $result2 = $controleInsere->consulta();
        //adicionando e redirecionando para a página principal.
        if ($result2 != 1) {
            echo "Erro no cadastro!";
        } else {
            header("refresh:3;url=../interface/index.html");
            echo "Disciplina Adicionada com Sucesso";
            $this->conexao = null;
        }
    }

    //Atualização de Dados no Banco (Update)
    function atualizaDisciplinaDados(Disciplina $disciplina) {

        //$idDisciplina = $disciplina->get('idDisciplina');
        $idProfessor = $disciplina->get('idProfessor');
        $idEdital = $disciplina->get('idEdital');
        //$login = $disciplina->get('login');
        //$senha = $disciplina->get('senha');
        $disciplina_ = $disciplina->get('disciplina_');
        $denominacao = $disciplina->get('denominacao');
        $orgao = $disciplina->get('orgao');
        $codigo = $disciplina->get('codigo');
        $nivel = $disciplina->get('nivel');
        $vigencia = $disciplina->get('vigencia');
        $preRequisitos = $disciplina->get('preRequisitos');
        $turma = $disciplina->get('turma');
        $numeroVagas = $disciplina->get('numeroVagas');
        $turno = $disciplina->get('turno');
        $horario = $disciplina->get('horario');
        $numeroCreditos = $disciplina->get('numeroCreditos');
        $ementa = $disciplina->get('ementa');
        $inscricao = $disciplina->get('inscricao');

        $controleAtualiza = $this->conexao;
        $controleAtualiza->set('sql', "UPDATE disciplina SET disciplina_ = $disciplina_,
                idProfessor = $idProfessor, idEdital =  $idEdital, disciplina_ = $disciplina_, denominacao = $denominacao, 
                orgao = $orgao, codigo = $codigo, nivel = $nivel, vigencia = $vigencia, 
                preRequisitos = $preRequisitos, turma = $turma, numeroVagas = $numeroVagas, 
                turno = $turno, horario = $horario,  numeroCreditos =  $numeroCreditos, 
                ementa = $ementa,  inscricao =  $inscricao");

        $controleAtualiza->conectar();
        $controleAtualiza->selecionarDB();

        $result = $controleAtualiza->consulta();

        if ($result != 1) {
            echo "Erro na atualização!";
        } else {
            header("refresh0;url=../interface/disciplina/index.html");
        }
    }

    //Recuperação de dados (Listagem)
    function recuperaDadosDisciplina(Disciplina $disciplina) {
        $id = $disciplina->get('idDisciplina');
        $controleListagem = $this->conexao;

        $controleListagem->set('sql', "SELECT * FROM disciplina WHERE idDisciplina = $id");
        $controleListagem->conectar();
        $controleListagem->selecionarDB();

        $result = $controleListagem->consulta();

        $recupera = mysql_fetch_array($result);
        return $recupera;
    }

    //Remoção de Usuário (Deleção)
    function excluiDisciplina(Disciplina $disciplina) {
        $id = $disciplina->get('idDisciplina');

        $controleExcluiDisciplina = $this->conexao;
        $controleExcluiDisciplina->set('sql', "DELETE FROM disciplina WHERE idDisciplina = $id");
        $controleExcluiDisciplina->conectar();
        $controleExcluiDisciplina->selecionarDB();

        $result2 = $controleExcluiDisciplina->consulta();

        if ($result2 != 1) {
            echo "Erro na operação!";
        } else {
            header("refresh:3;url=../interface/index.html");
            echo "Disciplina removida com suscesso!";
            $this->conexao = null;
        }
    }

}

?>
