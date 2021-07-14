<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
include('db.php');
$consulta="SELECT*FROM datosini where usuario='$usuario'and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
echo "<script>top.location.href='../Inicio/index.html'; </script>";
}else{
?>
<?php
include("index.php");
?>
<h1> Error datos erroneo o no registrado </h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);