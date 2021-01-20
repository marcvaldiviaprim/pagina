<?php 
require('database.php');
if(isset($_POST['enviar'])){
$nombreFor = trim($_POST['nombre']);
$categoriaFor = trim($_POST['categoria']);
$precioFor = trim($_POST['precio']);

$insert = "INSERT INTO productos(nombre, categoria, precio) VALUES ('$nombreFor','$categoriaFor','$precioFor')";
$resultado = mysqli_query($conn,$insert);
echo'insertado Correctamente';

 echo " <form method='POST'>";
    echo "<button type='submit' name='volver'>Volver</button> ";
    echo" </form>"; 
}else{
    echo'error';
}
if(isset($_POST['volver'])){
    header('Location: productos.php');
}

?>