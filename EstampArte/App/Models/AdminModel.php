<?php

class AdminModel
{
    // Creamos un atributo para manipular los datos en la base de datos
    private $userConnection;

    // Definimos el constructor de la clase UserModel
    public function __construct()
    {
        // Requerimos la clase de conexión a la base de datos
        require_once('App\config\DBConnection.php');
        // Instanciamos userConnection con Database_Conexion
        $this->userConnection = new Database_Conexion();
    }

    public function iniciarSesionAdmin($usuario, $contrasena) {
        // Obtener la conexión a la base de datos
        $connection = $this->userConnection->_GetConnection();
    
        // Llamar al procedimiento almacenado
        $sql = "CALL IniciarSesionAdmin('$usuario', '$contrasena')";
    
        // Ejecutar la consulta
        $result = $connection->query($sql);
    
        // Verificar si hubo algún error en la ejecución del procedimiento
        if ($result === false) {
            // Manejar el error, por ejemplo:
            die("Error al iniciar sesión: " . $connection->error);
        }
    
        // Obtener el resultado del procedimiento
        $row = $result->fetch_assoc();
        $mensaje = $row['Mensaje'];
    
        // Cerrar la conexión
        $this->userConnection->_CloseConnection();
    
        // Devolver el mensaje de éxito o error
        return $mensaje;
    }
}
?>