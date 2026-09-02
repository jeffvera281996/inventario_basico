<?php
require_once __DIR__ . '/../config/conexion.php';

class Producto
{
    private $conexion;

    public function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    // Insertar un nuevo producto
    public function insertar($nombre, $categoria, $precio, $cantidad, $descripcion)
    {
        $sql = "INSERT INTO productos (nombre, categoria, precio, cantidad, descripcion)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssdis", $nombre, $categoria, $precio, $cantidad, $descripcion);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    // Obtener todos los productos
    public function obtenerTodos()
    {
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        $resultado = $this->conexion->query($sql);

        $productos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }
        return $productos;
    }

    // Eliminar un producto (funcionalidad opcional mencionada en la guía)
    public function eliminar($id)
    {
        $sql = "DELETE FROM productos WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }
}
