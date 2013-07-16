<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-07-16 at 00:22:06.
 */
require_once \dirname(__FILE__) . '\..\..\controle\ConexaoBanco.php';
class ConexaoBancoTest extends PHPUnit_Framework_TestCase {

    /**
     * @var ConexaoBanco
     */
    protected $object;
     protected $con;
    

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ConexaoBanco;
        $this->object->set('host', 'localhost');
        $this->object->set('user', 'root');
        $this->object->set('pass', '');
        $this->object->set('db', 's3system');
        $this->con = mysql_connect('localhost', 'root', '', 's3system');
        $this->object->conectar();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

        /**
         * @covers ConexaoBanco::conectar
     * @todo   Implement testConectar().
     */
    public function testConectar() {
        // Remove the following lines when you implement this test.
        $this->assertNotEquals(0, $this->object->conectar());
    }

    /**
     * @covers ConexaoBanco::selecionarDB
     * @todo   Implement testSelecionarDB().
     */
    public function testSelecionarDB() {
        // Remove the following lines when you implement this test.
       $this->assertTrue($this->object->selecionarDB());
    }

    /**
     * @covers ConexaoBanco::consulta
     * @todo   Implement testConsulta().
     */
   public function testConsulta() {
        // Remove the following lines when you implement this test.
       $this->object->selecionarDB();
        $this->object->set('sql', "SELECT * FROM candidato WHERE idUsuario = 1");
          $this->assertNotEquals(false, $this->object->consulta());
    }

    /**
     * @covers ConexaoBanco::set
     * @todo   Implement testSet().
     */
   public function testSet() {
        // Remove the following lines when you implement this test.
      $this->object->set('pass', '');
    }

    /**
     * @covers ConexaoBanco::getSQL
     * @todo   Implement testGetSQL().
     */
  /*  public function testGetSQL() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ConexaoBanco::erro
     * @todo   Implement testErro().
     */
   /* public function testErro() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ConexaoBanco::encerraConexao
     * @todo   Implement testEncerraConexao().
     */
    public function testEncerraConexao() {
        // Remove the following lines when you implement this test.
        
        $this->object->encerraConexao();
    }

}
