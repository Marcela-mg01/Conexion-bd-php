<?php 

class conectar{
    public static function conexion(){
        $conexion = new mysqli("localhost", "root", "", "bdname");
        if($conexion)
        {
            return $conexion;
        }
        else
        {
            return "Error: ".mysqli_connect_error();//En caso de error se muestra un mensaje
        }
        
    }

}

?>
