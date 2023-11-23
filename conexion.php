<?php
/*clse de mysql con */
class Conexion extends PDO
{
    /** parametros de conexion */
    private $hostBd = 'localhost';
    private $nombreBd = 'web_service';
    private $usuarioBd = 'root';
    private $passwordBd = '';

    public function __construct()
    {
        try{
            parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch(PDOException $e){
            echo 'Error: :p ' . $e->getMessage();
            exit;
            }
    }

}
?>

