<?php
include("db.php");
if(isset($_POST['register'])){
    if(strlen($_POST['name'])>=1 && strlen($_POST['usuario'])>=1 && strlen($_POST['contraseña'])>=1){
        $name=trim($_POST['name']);
        $usuario=trim($_POST['usuario']);
        $contraseña=trim($_POST['contraseña']);
        $consulta="INSERT INTO datosini( Nombre, Usuario, Contraseña) VALUES ('$name','$usuario','$contraseña')";
        $res=mysqli_query($conec, $consulta);
        if($res){
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