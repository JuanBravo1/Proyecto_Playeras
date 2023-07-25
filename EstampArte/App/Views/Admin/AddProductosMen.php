<title>Agregar Producto</title>
</head>
<body>
    <h2>Agregar Producto</h2>
    <form action="http://localhost/EstampArte/?C=ProductController&M=indexAddProducts" method="POST" enctype="multipart/form-data">
        <label>ID Producto:</label>
        <input type="text" name="IDProducto" required><br>
        <label>Nombre:</label>
        <input type="text" name="Nombre" required><br>
        <label>Precio:</label>
        <input type="number" name="Precio" required><br>
        <label>Cantidad:</label>
        <input type="number" name="Cantidad" required><br>
        <label>Imagen:</label>
        <input type="file" name="Imagen" required><br>
        <input type="submit" value="Agregar Producto">
    </form>
</body>
</html>
