<?php
require_once '../includes/conexion.php';

if (isset($_POST['nombre'], $_POST['precio'], $_POST['stock'])) {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $precio = filter_var($_POST['precio'], FILTER_VALIDATE_FLOAT);
    $stock = filter_var($_POST['stock'], FILTER_VALIDATE_INT);

    if ($precio !== false && $stock !== false) {
        $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $precio, $stock]);
        header("Location: ../productos/index.php");
    } else {
        echo "Datos inválidos.";
    }
} else {
    echo "Faltan datos.";
}
