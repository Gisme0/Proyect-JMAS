<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>EMPLEADO</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Si eres un empleado de JMAS y ya cuentas con una cuenta, por favor inicia sesion, de lo contrario por favor registrate.</p>
					<br/>
					<h2> INICIAR SESION </h2>
					<br/>
					<form action="#">
  						<label for="fname">Numero de empleado:</label>
						<input type="text" name="fname"><br><br>
  						<label for="lname">Contraseña</label>
  						<input type="text" name="lname"><br><br>
  						<input type="submit" value="Iniciar"><br><br><br>
					</form>
					<h2> REGISTRARSE</h2><br>
					<form action="#">
  						<label for="fname">Nombre(s):</label>
						<input type="text"  name="fname"><br><br>
  						<label for="lname">Apellido(s):</label>
  						<input type="text"  name="lname"><br><br>
  						<label for="fname">Correo:</label>
						<input type="text"  name="Cname"><br><br>
						<label for="fname">No de empleado:</label>
						<input type="text"  name="Nname"><br><br>
  						<input type="submit" value="Registrarse"><br><br>
					</form>

				</article>
			</div>
<?php include("sidebar.php"); ?>
</div>
</section>
	<?php include("footer.php"); ?>
</body>
</html>