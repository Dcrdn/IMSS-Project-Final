<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Registrarse</h1>
			</div>
                    <form  action="../Ejecuciones.php" method="post">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Nombre(s)" name="nombres">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Apellido paterno" name="apepat">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Apellido Materno" name="apemat">
				<label class="login-field-icon fui-user" for="regnombre"></label>
				</div>

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Correo electrónico" name="correo">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Escriba una contraseña" name="contra">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
                                
                                <div class="control-group">
                                <input type="number" class="login-field" value="" placeholder="Numero de afiliación" name="afiliacion">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
                            
                                <input class="btn btn-primary btn-large btn-block" type='submit' name='boton' value='Registrarse'>
                                <a class="login-link" href="Login.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
			</div>
                    </form>
		</div>
	</div>
</body>
<script type="text/javascript">
</script>

</body>
</html>
