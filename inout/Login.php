<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
      <link rel="stylesheet" href="css/style.css">

  
</head>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Iniciar sesión</h1>
			</div>
                    <form  action="../Ejecuciones.php" method="POST">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" placeholder="Correo Electrónico" name="correo">
				</div>

				<div class="control-group">
				<input type="password" class="login-field" placeholder="Contraseña" name="contra">
				</div>

                            <input class="btn btn-primary btn-large btn-block" type='submit' name='boton' value='Iniciar sesion'>
                                <a class="login-link" href="Signup.php">¿Aun no tienes una cuenta? Registrate aquí</a>
			</div>
                    </form>
		</div>
	</div>
  

<script type="text/javascript">
</script>
</body>
</html>
