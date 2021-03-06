<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-07-13 at 20:46:32.
 */
require \dirname(__FILE__) . '\..\..\modelo\Candidato.php';

class CandidatoTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Candidato
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Candidato('03592075101');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        $this->object = null;
    }

    /**
     * @covers Candidato::set
     * @todo   Implement testSet().
     */
    public function testSet() {
        // Remove the following lines when you implement this test.
        $this->object->set('cpf', '11111111111');
        $this->assertEquals('11111111111', $this->object->get('cpf'));
    }

    /**
     * @covers Candidato::get
     * @todo   Implement testGet().
     */
   public function testGet() {
        // Remove the following lines when you implement this test.
        $this->object->set('cpf', '11111111111');
        $this->assertEquals('11111111111', $this->object->get('cpf'));
    }

}
