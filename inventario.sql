-- Base de datos del proyecto "Inventario Básico"
-- Nombre exigido por la guía: integradora

CREATE DATABASE IF NOT EXISTS integradora;
USE integradora;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    cantidad INT NOT NULL,
    descripcion TEXT,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Datos de ejemplo (opcional, puedes borrarlos)
INSERT INTO productos (nombre, categoria, precio, cantidad, descripcion) VALUES
('Mouse inalámbrico', 'Tecnología', 15.99, 20, 'Mouse óptico USB'),
('Teclado mecánico', 'Tecnología', 35.50, 10, 'Teclado retroiluminado');
