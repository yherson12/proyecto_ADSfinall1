<?php

class conectar
{
    public $servidor = "localhost";
    public $usuario = "root";
    public $password = "123456789";
    public $bd = "ventas";

    public function conexion()
    {
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
        return $conexion;
    }
}

?>
