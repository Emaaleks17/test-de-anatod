<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
 include("class.database.php"); 

          
            $conexion = mysqli_connect($dbserver,$dbuser) ; 
            mysqli_select_db($conexion,$db) ;



      $consulta = "   
            SELECT  localidad_id,localidad_nombre,  count(cliente_localidad) as RecuentoFilas 
            from localidades 
            left join clientes ON localidades.localidad_id = clientes.cliente_localidad
            GROUP BY localidades.localidad_id,localidades.localidad_nombre;
          
                  ";
        
            $datos = mysqli_query ($conexion,$consulta) or die(mysqli_error($conexion));


            while($fila=mysqli_fetch_array($datos))
            {
            echo '<h1>'.$fila["localidad_nombre"].'</h1>'

                 .'<p> cantidad de clientes: '.$fila["RecuentoFilas"].'</p>

            <p>-----------------------------------------------------------------------</p>';
            }

          mysqli_free_result($datos);  

echo' 
<p> <a href="formulario.php"><button > Volver a Formulario </button></a> </p>';
 ?>

</html>