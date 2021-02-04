<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("class.database.php"); 


$conexion = mysqli_connect($dbserver,$dbuser) ; 
mysqli_select_db($conexion,$db) ;

   		echo'	
   		<form  action="alta_clientes.php" method="post" >
   		<fieldset>

			Ingresar Nombre<br>
			<input type="text" name="nombre"><br>

			Dni<br>
			<input type="text" name="dni"><br>

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

      	<p> <input type="submit" value="Guardar" "> </p>

		</fieldset>
		</form>

		

		<a href="listado_clientes.php"><button > ver / editar Clientes</button></a>
		<a href="listado_provincias.php"><button > Localidades y cant de clientes</button></a>';			

 ?>

</html>