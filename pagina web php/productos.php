<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
      

        echo "<div class='container' >";
        echo " <form method='POST'>";
        echo "<ul class='list-group list-group-horizontal'>";
      
        echo "<li class='list-group-item'>identificador:  ". $id ."   </li>";
        echo "<li class='list-group-item'> Producto:  ". $nombre . "   </li>";
        echo "<li class='list-group-item'>". $precio . " €   </li>";
        echo "<lu class='list-group-item'> categoria: ". $categoria . "   </li>";
        echo "</ul>";
        echo "<button type='submit' class='btn btn-primary btn-sm col-sm-3' name='Actualizar' > Actualizar</button>";
        echo "<button type='submit'  class='btn btn-primary btn-sm col-sm-3 ' name='Eliminar'> Eliminar </button>";
      

        echo " </form>";
        echo "</div>";
        echo"<br>";
    
    }
    echo " <form method='POST'>";
    echo "<button type='submit'  class='btn btn-primary col-md-3'  name='anadir'>Añadir</button> ";
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