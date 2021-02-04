<!DOCTYPE html>
<html class="no-js" lang="en">


<body>

    <?php
    include ("editar_cliente.php");

    //recibimos las variables enviadas por el formulario
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $dni=$_POST["dni"];
    $localidad=$_POST["seleccion"];

   //conectamos a la base
    $conexion = mysqli_connect($dbserver,$dbuser) ; 
    mysqli_select_db($conexion,$db);


    $consulta = "UPDATE clientes Set cliente_nombre='$nombre',cliente_dni='$dni',cliente_localidad='$localidad'where cliente_id='$id'";
    mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

    header("location:listado_clientes.php");
    

    ?>

 
</body>
</html>