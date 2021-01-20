<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    

</body>
</html>

<?PHP 
    require('database.php');

    $sqlquery = "SELECT * FROM productos";
    $resultado = mysqli_query($conn,$sqlquery);

    while($printar = $resultado->fetch_assoc()){
        $id = $printar["id"];
        $nombre = $printar["nombre"];
        $categoria = $printar["categoria"];
        $precio = $printar["precio"];        
      

        echo "<div>";
        echo " <form method='POST'>";
        echo "<tr> <br>";
        
        echo "<td>". $id ."   </td>";
        echo "<td>". $nombre . "   </td>";
        echo "<td>". $precio . "   </td>";
        echo "<td>". $categoria . "   </td>";
        echo "</tr>";
        echo "<button type='submit' name='Actualizar' > Actualizar</button>";
        echo "<button type='submit' name='Eliminar'> Eliminar </button>";
      
        echo " </form>";
        echo "</div>";
    
    }
    echo " <form method='POST'>";
    echo "<button type='submit' name='anadir'>Añadir</button> ";
    echo" </form>"; 
    if(isset($_POST['Actualizar'])){
         
        
            header('Location: updateProductos.php');
       
    }
    if(isset($_POST['Eliminar'])){
        $Eliminar= "DELETE from productos where id = $id";
        $resultados = mysqli_query($conn,$Eliminar);
        $id=0;   
    
    }
    if(isset($_POST['anadir'])){

    header('Location: anadirProductos.php');

    }





?>