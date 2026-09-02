# inventario_basico
# Inventario Básico — PHP + MySQL + MVC

Aplicación web para registrar y consultar productos de un inventario, construida
con PHP, MySQL y JavaScript, siguiendo el patrón MVC.

## Estructura

```
inventario-basico/
├── index.php                     (controlador frontal / enrutador)
├── config/
│   └── conexion.php               (conexión a MySQL)
├── controllers/
│   └── ProductoController.php     (recibe acciones, valida, coordina)
├── models/
│   └── Producto.php                (INSERT / SELECT / DELETE)
├── views/
│   └── productos/
│       ├── crear.php               (formulario de registro)
│       └── listar.php              (tabla de productos)
├── css/estilos.css
├── js/script.js                    (validaciones antes de enviar)
└── database.sql                    (crea la BD "integradora" y la tabla)
```

## Cómo ejecutarlo

1. Instala **XAMPP / WAMP / Laragon** (incluyen PHP + MySQL + Apache).
2. Copia la carpeta `inventario-basico` dentro de `htdocs` (XAMPP) o `www` (WAMP).
3. Abre **phpMyAdmin** y ejecuta el archivo `database.sql` (o impórtalo directamente).
   Esto crea la base de datos `integradora` y la tabla `productos`.
4. Verifica que en `config/conexion.php` el usuario sea `root` y la clave esté vacía
   (así lo pide la guía). Si tu MySQL usa otra clave, cámbiala ahí.
5. Abre en el navegador: `http://localhost/inventario-basico/`

## Flujo de la aplicación

Vista (formulario) → Controlador (valida y recibe datos) → Modelo (INSERT) → MySQL
→ Vista (tabla de listado)

## Validaciones incluidas (JavaScript + PHP)

- Campos vacíos
- Campos numéricos (precio y cantidad)
- Longitud máxima de nombre, categoría y descripción
- Valores incorrectos (precio y cantidad deben ser mayores a 0)

## Commits sugeridos para GitHub (mínimo 7)

1. `Creación de estructura inicial del proyecto`
2. `Diseño de interfaz principal y hoja de estilos`
3. `Creación del formulario de registro de productos`
4. `Agregadas validaciones con JavaScript`
5. `Configuración de conexión con MySQL`
6. `Implementación del modelo Producto y ProductoController`
7. `Registro y consulta de productos desde MySQL`
8. *(Opcional)* `Agregada funcionalidad de eliminar productos`

Recuerda hacerlos en commits reales y separados (no todo de una sola vez) para
que se note el avance progresivo del proyecto.

