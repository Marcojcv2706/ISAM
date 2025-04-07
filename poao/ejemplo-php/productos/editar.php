<?php
require_once '../includes/conexion.php';


if (!isset($_GET['id'])) { 
    echo "ID de producto no proporcionado.";
    exit;
}

$id = $_GET['id'];


$stmt = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->execute([$id]);
$producto = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$producto) {
    echo "Producto no encontrado.";
    exit;
}
?>

<form action="../procesos/actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br><br>

    <label>Precio:</label><br>
    <input type="number" name="precio" step="0.01" min="0" value="<?= $producto['precio'] ?>" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" min="0" value="<?= $producto['stock'] ?>" required><br><br>

    <input type="submit" value="Actualizar Producto">
</form>
