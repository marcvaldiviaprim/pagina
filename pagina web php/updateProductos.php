<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
    <form action="actualizarProductos.php?id=$id" method="POST">
   	<input type="text" name="nombreForm" placeholder="nombreProducto">
   	<input type="text" name="categoriaForm" placeholder="categoria">
    <input type="text" name="precioForm" placeholder="precio">
   	<input type="submit" name="Actualizar">

    
    </form>
       
</body>
</html>
        <?php 
        if(isset($_POST['Actualizar'])){
        header('Location: actualizarProductos.php');
        }
        if(isset($_POST['anadir'])){
            header('Location: anadirProductos.php');
            }
        

        ?>
        


