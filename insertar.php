<?php
      
      $servidor = "localhost";
      $usuario = "root";
      $clave = "";
      $bd = "contactenos";


      $conectar = mysqli_connect($servidor, $usuario, $clave, $bd);

      if(!$conectar){
          echo "No conectado";
      } else {

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
    
        $sql = "INSERT INTO datos(nombre, apellidos, telefono, email, mensaje) VALUES ('$nombre', '$apellidos', '$telefono', '$email', '$mensaje')";
    
        $ejecutar = mysqli_query ($conectar, $sql);
    
            if(!$ejecutar){
                echo "Hay algun error";
            }else{
                echo"Datos almacenados correctamente<br><a href='contactenos.html'>Volver</a>";
            }

        }
  
     

?>