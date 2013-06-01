<?php


/**
 * Description of Disciplina
 *
 * @author tainarareis
 */
class Disciplina {
    
    //put your code here
    private $orgao;
    private $codigo;
    private $denomicacao;
    private $nivel;
    private $vigencia;
    private $preRequisitos;
    private $turma;
    private $numeroVagas;
    private $turno;
    private $horario;
    private $numeroCreditos;
    private $ementa;
    private $inscricao;
    
    
    
    // setters e getters
    public function setOrgao ($orgao) {
        $this-> orgao= $orgao;     
    }
    public function getOrgao () {
        return $this->orgao;
    }
    
    public function setCodigo ($codigo) {
        $this-> codigo= $codigo;
    }
    public function getCodigo () {
        return $this->codigo;
    }
    
    public function setDenominacao ($denominacao) {
        $this-> denominacao= $denominacao;
    }
    public function getDenominacao () {
        return $this->denominacao;
    }
    
    public function setNivel ($nivel) {
        $this-> nivel= $nivel;
    }
    public function getNivel () {
        return $this->nivel;
    }
    
    public function setVigencia ($vigencia) {
        $this-> vigencia= $vigencia;
    }
    public function getVigencia () {
        return $this->vigencia;
    }
    
    public function setPreRequisitos ($preRequisitos) {
        $this-> preRequisitos= $preRequisitos;
    }
    public function getPreRequisitos () {
        return $this->preRequisitos;
    }
    
    public function setTurma ($turma) {
        $this-> turma= $turma;
    }
    public function getTurma () {
        return $this->turma;
    }
    
    public function setNumeroVagas ($numeroVagas) {
        $this-> numeroVagas= $numeroVagas;
    }
    public function getNumeroVagas () {
        return $this->numeroVagas;
    }
    
    public function setTurno ($turno) {
        $this-> turno= $turno;
    }
    public function getTurno () {
        return $this->turno;
    }
    
    public function setNumeroCreditos ($numeroCreditos) {
        $this-> numeroCreditos= $numeroCreditos;
    }
    public function getNumeroCreditos () {
        return $this->numeroCreditos;
    }
   
    
    public function setHorario ($horario) {
        $this-> horario= $horario;
    }
    public function getHorario () {
        return $this->horario;
    }

    public function setEmenta ($ementa) {
        $this-> ementa= $ementa;
    }
    public function getEmenta () {
        return $this->ementa;
    }

    public function setInscricao ($inscricao) {
        $this-> inscricao= $inscricao;
    }
    public function getInscricao () {
        return $this->inscricao;
    }
    
    
  
}
?>
