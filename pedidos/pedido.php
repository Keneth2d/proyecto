<?php
include("db.php");
if(isset($_POST['pedido'])){
if(strlen($_POST['name'])>=1 && strlen($_POST['Provincia'])>=1 && strlen($_POST['tel'])>=1 && strlen($_POST['celular'])>=1 && strlen($_POST['Direccion'])>=1 && strlen($_POST['correo'])>=1)  
{
$name=$_POST['name'];
$Provincia= trim($_POST['Provincia']);
$correo=trim($_POST['correo']);
$tel=trim($_POST['tel']);
$celular=trim($_POST['celular']);
$Direccion=trim($_POST['Direccion']);
$consulta="INSERT INTO pedi2ini(Nombre,Provincia,Telefono, Celular, Direccion,Correo) VALUES ('$name','$Provincia',$tel,$celular,'$Direccion','$correo')";
$resultado=mysqli_query($conec,$consulta);
if($resultado){
    ?>
    <h3 class="ok">Registrado correctamente</h3>
    <?php
} else{
    ?>
 <h3 class="bad">Registrado incorrectamente se presento algun error o complete los campos </h3>
   <?php
}
}   else {
    ?> 
    <h3 class="bad">¡Por favor complete los campos!</h3>
   <?php
}
}

?>