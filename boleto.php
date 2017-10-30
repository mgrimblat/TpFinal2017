<?php


class boleto{

    private $monto;
    private $tipo;   // 0 = boleto normal, 1= medio boleto, 2=viaje plus, 3= pase libre
    private $fecha;
    private $linea;
    private $id;

    public function __construct ($saldo, $tipo, $fecha, $linea, $id){
        $this->saldo=$saldo;
        $this->tipo=$tipo;
        $this->fecha=$fecha;
        $this->linea=$linea;
        $this->id=$id;
    }

}






?>
