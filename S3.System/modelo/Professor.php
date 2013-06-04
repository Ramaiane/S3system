<?php
class Professor {
    
    private $professor_nome;
    private $professor_email;
    private $professor_contatoTelefone;   
    
    
    public function setProfessor_nome ($professor_nome) {
        $this-> professor_nome= $professor_nome;     
    }
    public function getProfessor_nome () {
        return $this->professor_nome;
    }
    
    public function setProfessor_email ($professor_email) {
        $this-> professor_email= $professor_email;
    }
    public function getProfessor_email () {
        return $this->professor_email;
    }
    
    public function setProfessor_contatoTelefone ($professor_contatoTelefone) {
        $this-> professor_contatoTelefone= $professor_contatoTelefone;
    }
    public function getProfessor_contatoTelefone () {
        return $this->professor_contatoTelefone;
    } 
    
}
?>
