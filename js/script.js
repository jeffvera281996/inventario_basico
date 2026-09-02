document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formProducto');
    if (!form) return; 

    form.addEventListener('submit', function (evento) {
        limpiarErrores();
        let esValido = true;

        const nombre = document.getElementById('nombre').value.trim();
        const categoria = document.getElementById('categoria').value;
        const precio = document.getElementById('precio').value.trim();
        const cantidad = document.getElementById('cantidad').value.trim();
        const descripcion = document.getElementById('descripcion').value.trim();

        if (nombre === '') {
            marcarError('nombre', 'El nombre es obligatorio.');
            esValido = false;
        } else if (nombre.length > 100) {
            marcarError('nombre', 'Máximo 100 caracteres.');
            esValido = false;
        }

        // Categoría: vacío
        if (categoria === '') {
            marcarError('categoria', 'Seleccione una categoría.');
            esValido = false;
        }

        if (precio === '') {
            marcarError('precio', 'El precio es obligatorio.');
            esValido = false;
        } else if (!/^\d+(\.\d{1,2})?$/.test(precio)) {
            marcarError('precio', 'Ingrese un número válido (ej: 15.50).');
            esValido = false;
        } else if (parseFloat(precio) <= 0) {
            marcarError('precio', 'El precio debe ser mayor a 0.');
            esValido = false;
        }
        if (cantidad === '') {
            marcarError('cantidad', 'La cantidad es obligatoria.');
            esValido = false;
        } else if (!/^\d+$/.test(cantidad)) {
            marcarError('cantidad', 'Ingrese solo números enteros.');
            esValido = false;
        } else if (parseInt(cantidad, 10) <= 0) {
            marcarError('cantidad', 'La cantidad debe ser mayor a 0.');
            esValido = false;
        }

        if (descripcion.length > 255) {
            marcarError('descripcion', 'Máximo 255 caracteres.');
            esValido = false;
        }

        if (!esValido) {
            evento.preventDefault();
        }
    });

    function marcarError(campoId, texto) {
        const spanError = document.getElementById('error-' + campoId);
        const campo = document.getElementById(campoId);
        if (spanError) spanError.textContent = texto;
        if (campo) campo.classList.add('input-error');
    }

    function limpiarErrores() {
        document.querySelectorAll('.error-campo').forEach(el => el.textContent = '');
        document.querySelectorAll('input, select, textarea').forEach(el => el.classList.remove('input-error'));
    }
});
