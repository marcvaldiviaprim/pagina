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
    if(isset($_POST['Actualizar'])){
    
    $idConsulta= "SELECT nombre=$nombre , precio=$precio , categoria=$categoria FROM productos WHERE id = $id";
    $resultados = mysqli_query($conn,$idConsulta);

   
        echo '<form>';
        echo '<input type="text" placeholder="'.$nombre.'">';
        echo '<input type="text" placeholder="'.$precio.'">';
        echo '<input type="text" placeholder="'.$categoria.'">';
        echo "<input type='submit' name='actualizar'>";
        echo '</form>';
        
    }

   

    if(isset($_POST['actualizar'])){
        $idConsulta= "UPDATE productos SET nombre = '$nombre' , categoria = '$categoria' ,precio = '$precio' WHERE id = $id";
        $resultado = mysqli_query($conn,$idConsulta);


    }  else{
        echo 'no se pueden actualizar los datos';
    }
    if(isset($_POST['Eliminar'])){
        $Eliminar= "DELETE from productos where id = $id";
        $resultados = mysqli_query($conn,$Eliminar);
    
    
    }





?>