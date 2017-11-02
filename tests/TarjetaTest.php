<?php

namespace dagos;

use PHPUnit\Framework\TestCase;

class TarjetaTest extends TestCase {


    public function testSaldoCero() {
        $tarjeta = new tarjeta;
        $this->assertEquals($tarjeta->get_saldo(), 0.0);
    }
}

?>
