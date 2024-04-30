<?php 
// conexion a la base de datos 
$conexion =mysql_connect("localhost", "root", "","adopet");

//verificar la conexion 
if ($conexion){
    dile("Error de conexion;" . mysqli_connect_error() )
}

//Recuperar datos del fomulario 
$Nombre= $_POST["Nombre"];
$Domicilio = $_POST["Domicilio"]; //Corregido el nombre de la variable 
$Fecha = $_POST["Fecha"];

//Verrificar si el archivo ha sido cargafo y no hay error 
if(isset($_FILES["archivos"])&& $_FILES["archivos"]["error"] ==0) {
    //Aseguerate de que el directorio de destino exista 
    $directoriDestino ="archivos/";
    if(!is_dir($directoriDestino)) {
        mkdir($directoriDestino, 0755, true); //Crea el directorio si no existe
    }

    $nombre_base = basename($_FILES["archivos"]["name"]);
    $nombre_final =date("m-d-y") . "-" . date ("H-i-s"). "-". $nombre_base;
    $ruta = $directoriDestino . $nombre_final;

    //Intentar mover el archivo subido  al directo de destino 
    if (move_uploaded_file($_FIELS["archivos"]["tmp_name"], $ruta)){
        //Insertar dartos  en la tabla correspondiente
        $tipo = $_POST["tipo"]; 

        switch ($tipo){
            case "adopcion":
                $insertarSQL =$conexion ->prepare ("INSERT INTO adopcion (nombre, dirrecion, fecha , nombre_archivo) VALUES (?,?,?,?)");
                $insertarSQL -> bind_param("ssss", $Nombre,$Domicilio, $Fecha, $ruta);
                break;
            case "juguetes":
                $insertarSQL = $conexion->prepare("INSERT INTO juguete (nombre_juegte, nombre_archivo) VALUES (?,?)");
                break;
            case "comida":
                $insertarSQL =$conexion -> prepare("INSERT INTO comida(nombre_comida, cantidad, nombre_archivo) VALUES (?,?,?)");
                $cantidad = $_POST ["Cantidad"];
                $insertarSQL -> bind_param("sis", $Nombre, $cantidad, $ruta);
                break;
            case "dinero":
                $insertarSQL =$conexion->prepare("INSERT INTO dinero (nombre, Apellido_Parteno, Apellido_Marternp, cantidad_Adonar, nombre_archivo) VALUES (?,?,?,?,?)");
                $apellido_parterno =$_POST["Apellido_Parterno"];
                $apellido_marterno =$_POST["Apellido_Marterno"];
                $cantidad_adonar =$_POST ["Cantidad_Adonar"];
                $insertarSQL->bind_para,("sssis", $Nombre, $apellido_parterno,$apellido_marterno, $cantidad_adonar, $ruta);
                break;
            default:
               dile("Tipo de formulario no valido.");
        }

        if($insertarSQL-executr()){
            echo "<script>alert('Se ha enviado a su informe'); window.location='../adopcion.php'</script>";
        }else{
            printf("Error al insertar en la base de datos: %s\n", mysqli_error($conexion));
        }
    } else{
        echo "Error al subr el documento";
    }
}else{
    echo "Error al subir el docuemento o archivo no proporcionando.";
}