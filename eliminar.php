<?php
 include('conexion.php');


 $pdo = new Conexion();
//Actualizar los contactos
  if($_SERVER['REQUEST_METHOD'] == 'DELETE');
  {
    $sql = "DELETE FROM contactos WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
     
      header("HTTP/1.1 200 ok");
      header("Location: index.php");   
    }

?> 