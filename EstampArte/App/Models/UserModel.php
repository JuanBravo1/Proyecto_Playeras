<?php

class UserModel
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

    // Método para obtener todos los usuarios
    public function getAll()
    {
        // Crear la consulta
        $sql = "CALL GetUsers()";
        // Obtener la conexión
        $connection = $this->userConnection->_GetConnection();
        // Ejecutar la consulta
        $result = $connection->query($sql);
        // Verificar y formatear los datos
        $users = array();
        while ($user = $result->fetch_assoc()) {
            $users[] = $user;
        }
        // Cerrar la conexión
        $this->userConnection->_CloseConnection();
        // Devolver los resultados
        return $users;
    }

    public function getById($id)
     
     {
    // Crear la consulta    
    $sql = "CALL GetUsuarioById($id)";
    // Obtener la conexión
    $connection = $this->userConnection->_GetConnection();
    // Ejecutar la consulta
    $result = $connection->query($sql);
    // Verificar y obtener los datos
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        $user = false;
    }
    // Cerrar la conexión
    $this->userConnection->_CloseConnection();
    // Devolver el resultado
    return $user;

     }
     public function addUser($nombre, $apellidos, $email, $contrasena) {
        // Obtener la conexión a la base de datos
        $connection = $this->userConnection->_GetConnection();

        // Llamar al procedimiento almacenado
        $sql = "CALL AddUser('$nombre', '$apellidos', '$email', '$contrasena')";

        // Ejecutar la consulta
        $result = $connection->query($sql);

        // Verificar si hubo algún error en la ejecución del procedimiento
        if ($result === false) {
            // Manejar el error, por ejemplo:
            die("Error al registrar el usuario: " . $connection->error);
        }

        // Cerrar la conexión
        $this->userConnection->_CloseConnection();

        // Devolver un mensaje de éxito o realizar otras acciones necesarias
        return "Usuario registrado exitosamente.";
    }
     
    public function iniciarSesion($correo, $contrasena) {
        // Obtener la conexión a la base de datos
        $connection = $this->userConnection->_GetConnection();
    
        // Llamar al procedimiento almacenado
        $sql = "CALL IniciarSesionUsuario('$correo', '$contrasena')";
    
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