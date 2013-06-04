<?php


/**
 * Description of Disciplina
 *
 * @author tainarareis
 */
class Disciplina {
    
    var $campo;
    var $valor;
    var $msg = array();
    
    //atributos
    private $orgao;
    private $codigo;
    private $denominacao;
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
    
    private $
    
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
    public function setOrgao ($orgao) {
        $this-> orgao= $orgao;     
    }
    public function getOrgao () {
        return $this->orgao;
    }
    
    public function setCodigo ($codigo) {
        $this-> codigo= $codigo;
        if (validarNumero($codigo, "Código")==NULL){
            
        }
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
    
    // Validar Numero
    public function validarNumero($campo,$numero) {
            if(!is_numeric($numero)) {
                    return $this->mensagens(6, $campo, null, null);
            }
    }
    
    // Verificação simples (Campo vazio, maximo/minimo de caracteres)
	function validarCampo($campo, $valor, $max, $min) {
		$this->campo = $campo;
			if ($valor == "") {
				return $this->mensagens(8, $campo, $max, $min);
			} 
			elseif (strlen($valor) > $max) {
				return $this->mensagens(9, $campo, $max, $min);
			} 
			elseif (strlen($valor) < $min) {
				return $this->mensagens(10, $campo, $max, $min);	
			}
	}
	
    public function mensagens($num, $campo, $max, $min) {
		
		$this->msg[0] = "Preencha o campo com um email válido <br />"; // EMAIL
		$this->msg[1] = "CEP com formato inválido (Ex: XXXXX-XXX) <br />"; // CEP
		$this->msg[2] = "Data em formato inválido (Ex: DD/MM/AAAA) <br />"; // DATA
		$this->msg[3] = "Telefone inválido (Ex: 01433333333) <br />"; // TELEFONE
		$this->msg[4] = "CPF inválido (Ex: 11111111111) <br />"; // CPF
		$this->msg[5] = "IP inválido (Ex: 192.168.10.1) <br />"; // IP
		$this->msg[6] = "Preencha o campo ".$campo." com numeros <br />"; // APENAS NUMEROS
		$this->msg[7] = "URL especificada é inválida (Ex: http://www.google.com) <br />"; // URL
		$this->msg[8] = "Preencha o campo ".$campo." <br />"; // CAMPO VAZIO
		$this->msg[9] = "O ".$campo." deve ter no máximo ".$max." caracteres <br />"; // MÁXIMO DE CARACTERES
		$this->msg[10] = "O ".$campo." deve ter no mínimo ".$min." caracteres <br />"; // MÍNIMO DE CARACTERES
		
		return $this->msg[$num];
	}
        
         // Metodo construtor
        function __construct(){
            //Passos que devem ser seguidos ao criar o objeto
            //criamos a nossa conexao com o banco de dados e selecionamos o banco
            $conexao = mysql_pconnect("localhost","root","123456") or die (mysql_error());
            $banco = mysql_select_db("oo");
        }
       
        function setProduto(){
            //realiza o insert no banco de dados passando os valores do objeto criado
            $insertProdutos = mysql_query("insert into produtos values(null,'$this->nome','$this->valor', '$this->quantidade','$this->categoria')");

            if($insertProdutos){
                $resposta="Inserido com sucesso";
            }else{
                $resposta ="Erro ao inserir";
            }

            return $resposta;
        }  
        function getProduto(){
            /* realiza o select no banco de dados e seleciona e guarda as informações na variavel $getProdutos,
            note que foi usava a chave estrangeira(utilizamos quando precisamos fazer alguma relacao com as tabelas) categoria que esta na tabela produto.
            */
            $getProdutos = mysql_query("select * from produtos, categorias where categoria = '$this->cat_id' and categoria = cat_id ");
            //este while serve para ir pegando os dados do select e enquanto existirem serem atribuidos a sua variavel e logo apos mostra-los na tela
            while($l = mysql_fetch_array($getProdutos)){
                $this->nome = $l["nome"];
                $this->valor = $l["valor"];
                print '<br>Nome:'.$this->nome."<br>";
                print 'Valor: R$ '.$this->valor."<br>";
            }
        }
        /* funcao que criei para fazer um select na tabela categorias e retornar todas as catergorias cadastradas dentro de um combo box(select) */
        function getSelect(){
            $getSelect = mysql_query("select * from categorias");
            print "<label for='Categoria'>Categoria:<br>";
            print "<select name='Categoria'>";
            while($l = mysql_fetch_array($getSelect)){
                $this->cat_id = $l["cat_id"];
                $this->cat_nome = $l["cat_nome"];
                /*veja que o value do option e o cat_id e o cat_nome e apenas o que aparece para o usuario. E este cat_id que será salvo na tabela categorias no campo categoria, para podermos fazer a nossa associacao*/
                print "<option value='{$this->cat_id}'>{$this->cat_nome}</option>";
            }
            print "</select>";
            print "</label>";
        }
}
?>
