<?PHP 
require('database.php');

$nombreAct=$_POST["nombreForm"];
$categoriaAct=$_POST["categoriaForm"];
$precioAct=$_POST["precioForm"];

 
$idConsulta= "UPDATE productos SET nombre='$nombreACT' , precio='$precioAct' , categoria='$categoriaAct' WHERE id = $id";
$resultados = mysqli_query($conn,$idConsulta);

?>