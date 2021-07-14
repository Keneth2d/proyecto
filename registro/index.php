
<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<button onclick="window.location='../login/index.php'" type="button" style= "font-size:50px; color:white; background-color:chartreuse;">ya registrado ir a el inicio de seccion</button>
    <form method="post">
    	<h1>Registrate en la pagina</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="text" name="usuario" placeholder="usuario">
		<input type="text" name="contraseña" placeholder="contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>