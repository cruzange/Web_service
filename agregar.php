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
    <center><h2>Agregar Nuevo Contacto:</h2></center>
 
    <form class="formulario" action="funciones.php" method="post">
        <!-- <label class="letra" for="id">id:</label>
        <input type="id" id="nombre" name="nombre" required maxlength="30"> -->

        <label class="letra" for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required maxlength="30">

        <label class="letra" for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required maxlength="30">
 
        <label class="letra" for="email">Email:</label>
        <input type="email" id="email" name="email"  maxlength="30">
        <br>
        <input class="agregar" type="submit" value="Agregar Contacto">
    </form>
</body>
</html>

