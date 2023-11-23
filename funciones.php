<?php
  include('conexion.php');


  $pdo = new Conexion();

  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id']))
    {
        $sql = $pdo->prepare("SELECT * FROM contactos WHERE id=:id");
        $sql->bindValue(":id",$_GET["id"]);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 ok!");
        echo json_encode($sql->fetchAll() );
        exit;
    } else {
        $sql = $pdo->prepare("SELECT * FROM contactos");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 Todo muy bien! ok");
        echo json_encode($sql->fetchAll() );
        exit;
    }
  }
  //insertar registro
  if($_SERVER['REQUEST_METHOD'] == 'POST');
  {
    $sql = "INSERT INTO contactos (nombre, telefono, email) VALUES (:nombre, :telefono, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nombre', $_POST['nombre']);
    $stmt->bindValue(':telefono', $_POST['telefono']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->execute();
    $idPost = $pdo->lastInsertId();
    if($idPost)
    {
      header("HTTP/1.1 200 ok");
      header("Location: index.php");
      echo json_encode($idPost);
      exit;
    }
  }
  
?> 