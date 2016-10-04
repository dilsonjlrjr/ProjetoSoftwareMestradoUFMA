<?php
/**
 * Created by PhpStorm.
 * User: higo
 * Date: 03/10/16
 * Time: 23:58
 */

use Tests\BaseUnitTests;

class PessoaTest extends BaseUnitTests {

    public $test;

    public function setUp() {
        $this->test = new Pessoa("Higo");
    }

    public function testNome() {
        $higo = $this->test->getNome();
        $this->assertTrue($higo == "Higo");
    }

}

?>