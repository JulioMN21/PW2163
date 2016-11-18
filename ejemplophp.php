<h1>Alta de Ususarios</h1>
<form action="ejemplo.php" method="POST">
	<input type="hidden" name="txtOculto" value="guardaUsuario"> <br>
	<input type="text" name="txtUsuario" id="txtUsuario"> <br>
	<input type="text" name="txtNombre" id="txtNombre"> <br>
	<input type="password" name="txtClave" id="txtClave"> <br>
	<select name="txtTipo" id="txtTipo">
		<option value="Administrador">Administrador</option>
		<option value="Invitado">Invitado</option>
		<option value="Colado">Colado</option>
	</select>
	<input type="submit" Value="Enviar">
</form>
<?php

?>

