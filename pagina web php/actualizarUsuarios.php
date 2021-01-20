<?PHP 
require('database.php');

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$contrasena=$_POST["contrasena"];

 
$idConsulta= "UPDATE usuarios SET nombre='$nombre' , correo='$correo' , contrasena='$contrasena' WHERE id = $id";
$resultados = mysqli_query($conn,$idConsulta);

?>