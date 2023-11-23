<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/contacto.png">
    <link rel="stylesheet" href="style.css">
    <title>Eliminar_contacto</title>
</head>
<body>
    <br>
<a href="index.php" class="Agregar1">Regresar</a>
    <center><h1 class="titulo"> WEB SERVICE</h1></center>
    <center><h2>Eliminar Contacto:</h2></center>
 
    <form class="formulario" action="eliminar.php" method="DELETE">
        
        <label class="letra" for="id">ID:</label>
        <input type="text" id="id" name="id" required maxlength="30">
        <br>
        <input class="Eliminar1" type="submit" value="Eliminar Contacto">
    </form>
</body>
</html>

