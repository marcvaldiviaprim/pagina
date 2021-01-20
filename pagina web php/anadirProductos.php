<!DOCTYPE html>
<html>
<head>
	<title>Anadir Productos</title>
	<meta charset="utf-8">
</head>
<body>
    <form action='insertProductos.php' method="post">
	<h1>Anadir Productos</h1>
   	<input type="text" name="nombre" placeholder="nombre Producto">
   	<input type="text" name="categoria" placeholder="categoria">
    <input type="number" name="precio" placeholder="precio">
   	<input type="submit" name="enviar">
    </form>
        
</body>
</html>