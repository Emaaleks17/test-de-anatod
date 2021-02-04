<!DOCTYPE html>
<html class="no-js" lang="en">

<body>

    <?php

	include("class.database.php");
	
	//recibimos la variable id enviada en el enlace por GET
    $id=$_GET["id"];

    //conectamos a la base
    $conexion = mysqli_connect($dbserver,$dbuser) ; 
	mysqli_select_db($conexion,$db) ;

	$consulta = "SELECT * from clientes where cliente_id='$id'";
    $result = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

		    while($row=mysqli_fetch_array($result))
		    {
		    echo 
			    '<form action="modificar_cliente.php" method="post">
			    <input type="hidden" name="id" value="'.$row["cliente_id"].'"><br>

			    Nombre:<br>
			    <input type="text" name="nombre" value="'.$row["cliente_nombre"].'"><br>

			    Nombre:<br>
			    <input type="text" name="dni" value="'.$row["cliente_dni"].'"><br>

			    <p>
				<select name="seleccion">
        		<option value="0">Elegir localidad:</option>';
        			
          			$consulta =  "SELECT * FROM localidades ";
          			$datos = mysqli_query ($conexion,$consulta) or die(mysqli_error($conexion));

         			 while($valores=mysqli_fetch_array($datos)){
         			   echo
         			    '<option value="'.$valores["localidad_id"].'">'.$valores["localidad_nombre"].'
         		  </option>';}
         		  mysqli_free_result($datos);
         			echo'
      			</select>
      			</p>

			    <input type="submit" value="Guardar"><br>
			    </form>';
		    }

    mysqli_free_result($result);
    mysqli_close($conexion);

    ?>

</body>

</html>