<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Disciplina
 *
 * @author tainarareis
 */
class Disciplina {
    
    //atributos
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
    private $prop;
    private $value;
    
    //método construtor
    public function __construct($orgao, $codigo, $denominacao, $nivel, $vigencia, $preRequisitos, 
            $turma, $numeroVagas, $turno, $horario, $numeroCreditos, $ementa, $inscricao) {
        $this-> orgao= $orgao; 
        $this-> codigo= $codigo;
        $this-> denominacao= $denominacao;
        $this-> nivel= $nivel;
        $this-> vigencia= $vigencia;
        $this-> preRequisitos= $preRequisitos;
        $this-> turma= $turma;
        $this-> numeroVagas= $numeroVagas;
        $this-> turno= $turno;
        $this-> numeroCreditos= $numeroCreditos;
        $this-> horario= $horario;
        $this-> ementa= $ementa;
        $this-> inscricao= $inscricao;
        
    }
    
    // setters e getters
    
    public function set($prop, $value){
        $this->$prop = $value;
    }
    
    public function getOrgao () {
        return $this->orgao;
    }
    
    public function getCodigo () {
        return $this->codigo;
    }
    
    public function getDenominacao () {
        return $this->denominacao;
    }
    
    public function getNivel () {
        return $this->nivel;
    }
    
    public function getVigencia () {
        return $this->vigencia;
    }
    
    public function getPreRequisitos () {
        return $this->preRequisitos;
    }
    
    public function getTurma () {
        return $this->turma;
    }
    
    public function getNumeroVagas () {
        return $this->numeroVagas;
    }
    
    public function getTurno () {
        return $this->turno;
    }
    
    public function getNumeroCreditos () {
        return $this->numeroCreditos;
    }
   
    public function getHorario () {
        return $this->horario;
    }

    public function getEmenta () {
        return $this->ementa;
    }

    public function getInscricao () {
        return $this->inscricao;
    }
    
}
?>