<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>USUARIO-REGISTRO</h1>
			</div>

			<div class="articulo">
				<article>
					<h3>Por favor llene los campos con la informacion correspondiente.</h3>
					<br/>
					<form action="#">
  					<label for="fname">Nombre(s):</label>
  					<input type="text" id="fname" name="fname"><br><br>
  					<label for="lname">Apellido(s):</label>
  					<input type="text" id="lname" name="lname"><br><br>
  					<label for="fname">Numero de Telefono:</label>
  					<input type="text" id="Nname" name="Nname"><br><br>
  					<label for="lname">Direccion:</label>
  					<input type="text" id="Dname" name="Dname"><br><br>
  					<label for="fname">Correo Electronico:</label>
  					<input type="text" id="Ename" name="Ename"><br><br>
  					<h3>Selecciona tu sucursal mas cercana</h3>
  					 <input type="radio" id="html" name="fav_language" value="HTML">
  					<label for="html">Henequen</label><br>
  					<input type="radio" id="css" name="fav_language" value="CSS" checked="checked">
  					<label for="css">Independencia</label><br>
  					<input type="radio" id="javascript" name="fav_language" value="JavaScript">
  					<label for="javascript">Continental</label><br>
  					<input type="radio" id="javascript" name="fav_language" value="JavaScript">
  					<label for="javascript">Plaza Anapra</label><br><br>
 					 <input type="submit" value="Registrar">
					</form>
				</article>
			</div>

			<?php include("sidebar.php"); ?>
</div>
</section>
	<?php include("footer.php"); ?>
</body>
</html>