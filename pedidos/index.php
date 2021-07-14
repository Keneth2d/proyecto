
<html>
<html>
<head>
<body background="https://i.pinimg.com/736x/2e/9d/b2/2e9db2a4b126039a74e49262d8a6feb9.jpg">
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body>
    <form method="post">
    	<h1>Solicita informacion</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="text" name="Provincia" placeholder="Provincia">
        <input type="text" name="tel" placeholder="telefono convencional">
    	<input type="text" name="celular" placeholder="celular">
		<input type="text" name="Direccion" placeholder="Direccion">
		<input type="text" name="correo" placeholder="correo">
    	<input type="submit" name="pedido2">
    </form>
        <?php 
        include("pedido.php");
        ?>
</body>
</html>