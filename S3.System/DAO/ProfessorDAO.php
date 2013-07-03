<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../controle/ConexaoBanco.php';

class ProfessorDAO {

    public $conexao = null;
    public function ProfessorDAO() {
        $this->conexao = new ConexaoBanco;
    }
    
    }

?>
