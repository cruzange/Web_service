<?php
 include('conexion.php');


 $pdo = new Conexion();
//Actualizar los contactos
  if($_SERVER['REQUEST_METHOD'] == 'PUT');
  {
    $sql = "UPDATE contactos SET nombre=:nombre, telefono=:telefono, email=:email WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nombre', $_GET['nombre']);
    $stmt->bindValue(':telefono', $_GET['telefono']);
    $stmt->bindValue(':email', $_GET['email']);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
     
      header("HTTP/1.1 200 ok");
      header("Location: index.php");   
    }

?> 