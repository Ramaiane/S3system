<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Secretaria
 *
 * @author Carol
 */
class Secretaria {
    
    private $sigla;
    private $nomeProgrma;
    private $responsavel;
    private $enderecoLogo;
    private $telefoneContato;
    private $emailContato;
    private $dataRegistro;
    
    
    
    function __construct( $sigla, $nomePrograma, $responsavel, $enderecoLogo, $telefoneContato, $emailContato, $dataRegistro) { 


$this->sigla=$sigla;
$this->nomePrograma=$nomePrograma;
$this->responsavel=$responsavel;
$this->enderecoLogo=$enderecoLogo;
$this->telefoneContato=$telefoneContato;
$this->emailContato=$emailContato;
$this->dataRegistro=$dataRegistro;
}
 
    // setters e getters
    
    
    
    public function setSigla ($sigla) {
        $this->sigla = $sigla;
    }
    public function getSigla () {
        return $this->sigla;
    }
 
    public function setNomePrograma ($nomePrograma) {
        $this->nomePrograma = $nomePrograma;
    }
    public function getNomePrograma() {
        return $this->nomePrograma;
    }
 
    public function setResponsavel ($responsavel) {
        $this->responsavel = $responsavel;
    }
    public function getResponsavel () {
        return $this->responsavel;
    }
 
    public function setEnderecoLogo ($enderecoLogo) {
        $this->enderecoLogo = $enderecoLogo;
    }
    public function getEnderecoLogo () {
        return $this->enderecoLogo;
    }
    
    public function setTelefoneContato ($telefoneContato) {
        $this->telefoneContato = $telefoneContato;
    }
    public function getTelefoneContato () {
        return $this->telefoneContato;
    }
    
    public function setEmailContato ($emailContato) {
        $this->emailContato = $emailContato;
    }
    public function getEmailContato () {
        return $this->emailContato;
    }
    
    public function setDataRegistro ($dataRegistro) {
        $this->dataRegistro = $dataRegistro;
    }
    public function getDataRegistro () {
        return $this->dataRegistro;
    }
    
   
}



?>
