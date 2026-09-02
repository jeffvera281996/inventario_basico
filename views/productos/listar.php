<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventario Básico - Listado de productos</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">

    <nav class="menu">
        <a href="index.php?action=listar" class="activo">Inventario</a>
        <a href="index.php?action=crear">Nuevo producto</a>
    </nav>

    <div class="tarjeta ancha">
        <h1>Listado de productos</h1>

        <?php if (($_GET['mensaje'] ?? '') === 'ok'): ?>
            <p class="mensaje exito">Producto registrado correctamente.</p>
        <?php endif; ?>

        <?php if (empty($productos)): ?>
            <p class="vacio">No hay productos registrados todavía.</p>
        <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= htmlspecialchars($p['nombre']) ?></td>
                    <td><?= htmlspecialchars($p['categoria']) ?></td>
                    <td>$<?= number_format((float)$p['precio'], 2) ?></td>
                    <td><?= $p['cantidad'] ?></td>
                    <td><?= htmlspecialchars($p['descripcion']) ?></td>
                    <td>
                        <a class="btn-eliminar" href="index.php?action=eliminar&id=<?= $p['id'] ?>"
                           onclick="return confirm('¿Eliminar este producto?')">🗑️</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
