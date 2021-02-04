<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
 include("class.database.php"); 

          
            $conexion = mysqli_connect($dbserver,$dbuser) ; 
            mysqli_select_db($conexion,$db) ;
            $consulta = "SELECT * FROM clientes 
            inner join localidades on clientes.cliente_localidad = localidades.localidad_id 
            inner join provincias on localidades.localidad_provincia = provincias.provincia_id";  
            $datos = mysqli_query ($conexion,$consulta) or die(mysqli_error($conexion));

            while($fila=mysqli_fetch_array($datos))
            {
            echo '<h1>'.$fila["cliente_nombre"].'</h1><p>'.$fila["cliente_dni"].'</p>
            <div>'.$fila["localidad_nombre"]." - ".$fila["provincia_nombre"].' 
            
            <P>
            <button> <a href="editar_cliente.php?id='.$fila["cliente_id"].'">editar</a> </button>
            </p>
            <p>----------------------------------------------------------------------------</p>';}
             mysqli_free_result($datos);
echo'	
<p> <a href="formulario.php"><button > Volver a Formulario </button></a> </p>';
 ?>

</html>