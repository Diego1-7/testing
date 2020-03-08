<?php

    require 'connect.php';

    $Nombre = $_POST['nombrecompleto'];
    $Cedula = $_POST['cedula'];  
    $Numeroboleto = $_POST['numeroboleto'];
    $Verificacionboleto = $_POST['verificacionboleto'];
    
    
    
        $insertar = "INSERT INTO bdboletos (nombrecompleto, cedula, numeroboleto, verificacionboleto) VALUES ('$Nombre', '$Cedula', 
        '$Numeroboleto', '$Verificacionboleto')";


        $resultado = mysqli_query($conexion,$insertar);

        if (!$resultado)
        {
            echo "Error al Conectar";
        }else{
            header("location:index.php");
        }

        mysqli_close($conexion);
    
    

    

    

?>