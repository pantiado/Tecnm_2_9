<?php

class Vehiculos_model{

    private $db;
    private $vehiculos;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->vehiculos = array();
}

public function get_vehiculos()
{
    $sql = "SELECT * FROM vehiculos";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->vehiculos[] = $row;
    }
    return $this->vehiculos;
}

public function insertar($placa, $marca, $modelo, $anio, $color) 
{
    $sql = "INSERT INTO vehiculos ('placa', 'marca', 'modelo', 'anio', 'color') VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')";
    $resultado = $this->db->query($sql);
}
}
?>
