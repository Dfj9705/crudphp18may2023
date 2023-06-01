<?php
require_once 'Conexion.php';

class Venta extends Conexion{
    public $venta_id;
    public $venta_cliente;
    public $venta_fecha;
    public $venta_situacion;


    public function __construct($args = [] )
    {
        $this->venta_id = $args['venta_id'] ?? null;
        $this->venta_cliente = $args['venta_cliente'] ?? '';
        $this->venta_fecha = $args['venta_fecha'] ?? '';
        $this->venta_situacion = $args['venta_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO ventas(venta_cliente, venta_fecha) values('$this->venta_cliente','$this->venta_fecha')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}