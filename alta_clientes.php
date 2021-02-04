<!DOCTYPE html>
<html class="no-js" lang="en">


<body>


<?php include("class.database.php"); ?>

<?php
     	 if (isset($_POST["nombre"], $_POST["dni"], $_POST["seleccion"]) and $_POST["nombre"] !="" and $_POST["dni"]!="" and $_POST["seleccion"]!="" ){

     	 	$nombre=$_POST["nombre"];
			$dni=$_POST["dni"];
			$localidad=$_POST["seleccion"];

			$conexion = mysqli_connect($dbserver,$dbuser) ; // a la variable $conexion esta la conexion a la bd
	    	mysqli_select_db($conexion,$db) ;

	    	$consulta = "INSERT INTO clientes (cliente_id, cliente_nombre, cliente_dni, cliente_localidad) VALUES (NULL, '$nombre', '$dni', '$localidad')";

			//insertamos los registros almacenados en las variables
			mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
				header("location: listado_clientes.php");
					}
?>

</body>

</html>