<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventario Básico - Registrar producto</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor">

    <nav class="menu">
        <a href="index.php?action=listar"> Inventario</a>
        <a href="index.php?action=crear" class="activo"> Nuevo producto</a>
    </nav>

    <div class="tarjeta">
        <div class="icono-cabecera"></div>
        <h1>Registrar producto</h1>

        <?php if (!empty($mensaje)): ?>
            <p class="mensaje error"><?= htmlspecialchars($mensaje) ?></p>
        <?php endif; ?>

        <form id="formProducto" action="index.php?action=guardar" method="POST" novalidate>

            <label for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" name="nombre" maxlength="100"
                   value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
            <span class="error-campo" id="error-nombre"></span>

            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria">
                <option value="">Seleccione...</option>
                <option value="Tecnología">Tecnología</option>
                <option value="Oficina">Oficina</option>
                <option value="Hogar">Hogar</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Otros">Otros</option>
            </select>
            <span class="error-campo" id="error-categoria"></span>

            <label for="precio">Precio ($)</label>
            <input type="text" id="precio" name="precio" placeholder="Ej: 15.50"
                   value="<?= htmlspecialchars($_POST['precio'] ?? '') ?>">
            <span class="error-campo" id="error-precio"></span>

            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" placeholder="Ej: 10"
                   value="<?= htmlspecialchars($_POST['cantidad'] ?? '') ?>">
            <span class="error-campo" id="error-cantidad"></span>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" maxlength="255"><?= htmlspecialchars($_POST['descripcion'] ?? '') ?></textarea>
            <span class="error-campo" id="error-descripcion"></span>

            <button type="submit"> Guardar producto</button>
        </form>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
