<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/contacto.png">
    <link rel="stylesheet" href="style.css">
    <title>Agregar Contacto</title>
</head>
<body>
    <br>
<a href="index.php" class="Agregar1">Regresar</a>
    <center><h1 class="titulo"> WEB SERVICE</h1></center>
    <center><h2>Actualizar Contacto:</h2></center>
 
    <form class="formulario" action="actualizar.php" method="put">
        
        <label class="letra" for="id">ID:</label>
        <input type="text" id="id" name="id" required maxlength="30">

        <label class="letra" for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required maxlength="30">

        <label class="letra" for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required maxlength="30">
 
        <label class="letra" for="email">Email:</label>
        <input type="email" id="email" name="email"  maxlength="30">
        <br>
        <input class="Actualizar1" type="submit" value="Actualizar Contacto">
    </form>
</body>
</html>

