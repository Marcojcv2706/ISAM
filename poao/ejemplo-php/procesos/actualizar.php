<?php
require_once '../includes/conexion.php';

if (isset($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['stock'])) {
    $id = $_POST['id'];
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $precio = filter_var($_POST['precio'], FILTER_VALIDATE_FLOAT);
    $stock = filter_var($_POST['stock'], FILTER_VALIDATE_INT);

    if ($precio !== false && $stock !== false) {
        $stmt = $pdo->prepare("UPDATE productos SET nombre = ?, precio = ?, stock = ? WHERE id = ?");
        $resultado = $stmt->execute([$nombre, $precio, $stock, $id]);
        header("Location: ../productos/index.php");
    } else {
        echo "Datos inválidos.";
    }
} else {
    echo "Faltan datos.";
}