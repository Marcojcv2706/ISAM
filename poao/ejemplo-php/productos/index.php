<?php
require_once '../includes/conexion.php';

$stmt = $pdo->query("SELECT * FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listado de Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <a href="crear.php">Agregar Producto</a><br>
    <?php if (count($productos) > 0): ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['stock'] ?></td>
                <td>
                    <form action="../procesos/eliminar.php" method="POST" class="eliminar-form">
                        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                    <form>
                        <a href="editar.php?id=<?= $producto['id'] ?>">Editar</a>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <p>No existen productos en la tabla</p>
    <?php endif; ?>
    <script src="../js/scripts.js"></script>
</body>
</html>
