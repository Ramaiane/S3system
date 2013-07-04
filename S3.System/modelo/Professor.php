<?php
include_once 'Usuario.php';

class Candidato extends Usuario{
    
    private $idProfessor;
    private $idUsuario;
    private $idSecretaria;
    private $professor_nome;
    private $professor_email;
    private $professor_contatoTelefone;  
    private $prop;
    private $value;
    
//    public $tipo = 2;
    
    public function __construct($idProfessor, $idUsuario, $idSecretaria,
            $professor_nome, $professor_email, $professor_contatoTelefone){
        $this-> orgao= $idProfessor; 
        $this-> codigo= $idUsuario;
        $this-> denominacao= $idSecretaria;
        $this-> nivel= $professor_nome;
        $this-> vigencia= $professor_email;
        $this-> preRequisitos= $professor_contatoTelefone;        
    }
    
       function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    } 
    
}
?>
