<!DOCTYPE html>
<html lang="esclear">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/contacto.png">
    <title>Lista de Contactos</title>
    
</head>
<body>
    <center><h1 class="titulo"> WEB SERVICE</h1></center>
    <center><h2>Lista de Contactos:</h2></center>
    <table>
        <thead>
            <tr class="columnas">
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
        </thead>
        <tbody class="colorD">
        <?php
//COMO CONSUMIR UN SERVICE REST CON PHP, Y JSON
$datos = json_decode(file_get_contents("http://localhost/web_service/funciones.php"), true);
//print_r($datos);
echo"<br>";
for ($i = 0; $i < count($datos); $i++){
    echo "<tr>";
    echo "<td>". $datos[$i]["id"]."</td>";
    echo "<td>". $datos[$i]["nombre"]."</td>";
    echo "<td>". $datos[$i]["telefono"]."</td>";
    echo "<td>". $datos[$i]["email"]."</td>";
    echo "</tr>";
}

?>
        </tbody>
    </table>
    <br>
    <div class="Botonesf">
    <a href="agregar.php" class="Agregar1">Agregar Contacto</a>
    <a href="actualizar_contacto.php" class="Actualizar1">Actualizar Contacto</a> 
    <a href="Eliminar_contacto.php" class="Eliminar1">Eliminar Contacto</a> 
    </div>
   
</body>
</html>
