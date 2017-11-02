<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {


    public function testSaldoCero() {
        $tarjeta = new Tarjeta;
        $this->assertEquals($tarjeta->get_saldo(), 0.0);
    }
}

?>
