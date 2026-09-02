<?php
require_once __DIR__ . '/controllers/ProductoController.php';

$controlador = new ProductoController();
$accion = $_GET['action'] ?? 'listar';

switch ($accion) {
    case 'crear':
        $controlador->mostrarFormulario();
        break;

    case 'guardar':
        $controlador->guardar();
        break;

    case 'eliminar':
        $controlador->eliminar();
        break;

    case 'listar':
    default:
        $controlador->listar();
        break;
}
