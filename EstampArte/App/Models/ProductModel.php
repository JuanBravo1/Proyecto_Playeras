<?php

class ProductModel
{
    private $dbConnection;

    public function __construct()
    {
        require_once('App/config/DBConnection.php');
        $this->dbConnection = new Database_Conexion();
    }

    public function insertarProducto($idProducto, $nombre, $precio, $cantidad, $imagen)
    {
        // Obtener la conexión a la base de datos
        $connection = $this->dbConnection->_GetConnection();

        // Llamar al procedimiento almacenado
        $sql = "CALL InsertarProducto('$idProducto', '$nombre', '$precio', '$cantidad', ?)";

        // Preparar la sentencia
        $stmt = $connection->prepare($sql);

        // Asociar el parámetro de la imagen
        $stmt->bind_param('b', $imagen);

        // Ejecutar la consulta
        $stmt->execute();

        // Cerrar la conexión
        $this->dbConnection->_CloseConnection();

        // Puedes devolver algún mensaje de éxito si lo deseas
    }
}
