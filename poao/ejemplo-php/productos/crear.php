<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form action="../procesos/insertar.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Precio:</label><br>
        <input type="number" name="precio" step="0.01" min="0" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" min="0" required><br><br>

        <input type="submit" value="Agregar Producto">
    </form>
</body>
</html>
