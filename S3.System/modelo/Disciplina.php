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
    private $prop;
    
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
    
   function get($prop){
        return $this->$prop;
    }
}
?>