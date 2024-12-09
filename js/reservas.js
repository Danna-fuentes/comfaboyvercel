// Función para mostrar/ocultar el menú de niños y adultos
function toggleAcompanantes() {
    var acompanantesInput = document.getElementById('acompanantes');
    var acompanantes = parseInt(acompanantesInput.value, 10);  // Usar base 10 en parseInt
    if (isNaN(acompanantes)) {
        acompanantes = 0; // Valor por defecto si el input no es numérico
    }
    var detalleAcompanantes = document.getElementById('detalle-acompanantes');
    console.log('Número de acompañantes:', acompanantes);

    // Si el número de acompañantes es mayor o igual a 1, mostramos el menú
    if (acompanantes >= 1) {
        detalleAcompanantes.style.display = 'block';
    } else {
        detalleAcompanantes.style.display = 'none';
    }
}

// Función para mostrar/ocultar el menú de categorías según afiliación
function toggleAfiliado() {
    var afiliadoSi = document.getElementById('afiliado-si');
    var categorias = document.getElementById('categorias');

    // Si el usuario selecciona "Sí", mostramos el menú de categorías
    if (afiliadoSi.checked) {
        categorias.style.display = 'block';
    } else {
        categorias.style.display = 'none';
    }
}

// Función para mostrar/ocultar el campo de cantidad de caninos
function toggleMascotas() {
    var mascotaSi = document.getElementById('mascota-si');
    var cantidadCaninosContainer = document.getElementById('cantidad-caninos-container');

    // Mostrar el campo de caninos solo si el usuario selecciona "Sí"
    if (mascotaSi.checked) {
        cantidadCaninosContainer.style.display = 'block';
    } else {
        cantidadCaninosContainer.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Acompañantes
    document.getElementById('acompanantes').addEventListener('input', toggleAcompanantes);

    // Afiliado
    document.getElementById('afiliado-si').addEventListener('change', toggleAfiliado);
    document.getElementById('afiliado-no').addEventListener('change', toggleAfiliado);

    // Mascotas
    document.getElementById('mascota-si').addEventListener('change', toggleMascotas);
    document.getElementById('mascota-no').addEventListener('change', toggleMascotas);
    
});