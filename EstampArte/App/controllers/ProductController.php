// ProductController.php
<?php
require_once("App/Models/ProductModel.php");
class ProductController
{
    public function indexAddProducts()
    {
        // Si el formulario se envió
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $idProducto = $_POST['IDProducto'];
            $nombre = $_POST['Nombre'];
            $precio = $_POST['Precio'];
            $cantidad = $_POST['Cantidad'];
            $imagen = file_get_contents($_FILES['Imagen']['tmp_name']); // Obtener la imagen como datos binarios

            // Instanciar el modelo para interactuar con la base de datos
            $model = new ProductModel();

            // Llamar al procedimiento almacenado para insertar el producto
            $model->insertarProducto($idProducto, $nombre, $precio, $cantidad, $imagen);

            // Redirigir a la página de éxito o a otra página según necesites
            header("Location: ruta_de_la_pagina_de_exito");
            exit;
        }

       
    }

    
}
?>