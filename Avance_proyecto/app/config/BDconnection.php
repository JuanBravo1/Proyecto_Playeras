<?php
class DBconnection{

    private $connection;
    public function __construct(){
        //requerir los datos o credenciales de coneccion al la base de datos 
        require_once('app/config/config.php');
        //creamos la instancia de la coneccion a base de datos 
        $this->connection=new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
        //manejo de errores
        if($this->connection->connect_error){
            die('Error al conectar con la base de datos : '.$this->connection->connect_error);
        }
    }

    //creamos un metodo para obtener la coneccion 
    public function getconnection(){
        return $this->connection;
    }

    //creamos nuestro metodo para desconectar la base de datos
    public function closeConecction(){
        $this->connection->close();
    }
}
?>
}