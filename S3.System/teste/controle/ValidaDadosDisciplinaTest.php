<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-07-14 at 23:27:37.
 */
require \dirname(__FILE__) . '\..\..\controle\ValidaDadosDisciplina.php';

class ValidaDadosDisciplinaTest extends PHPUnit_Framework_TestCase {

    /**
     * @var ValidaDadosDisciplina
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ValidaDadosDisciplina;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers ValidaDadosDisciplina::checaCampoEmBranco
     * @todo   Implement testChecaCampoEmBranco().
     */
    public function testChecaCampoEmBranco() {
        // Remove the following lines when you implement this test.
        $this->assertTrue($this->object->checaCampoEmBranco('teste'));
        $this->assertFalse($this->object->checaCampoEmBranco(''));
    }

    /**
     * @covers ValidaDadosDisciplina::campoNumerico
     * @todo   Implement testCampoNumerico().
     */
    public function testCampoNumerico() {
        
        $this->assertTrue($this->object->campoNumerico('11111111'));
        $this->assertFalse($this->object->campoNumerico('teste'));

        }

}
