document.addEventListener('DOMContentLoaded', () => {
    const eliminarForms = document.querySelectorAll('.eliminar-form');

    eliminarForms.forEach(form => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const confirmacion = confirm('¿Estás seguro de eliminar este producto?');
            if (confirmacion) {
                form.submit();
            }
        });
    });
});
