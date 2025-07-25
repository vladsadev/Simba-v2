<!-- Scripts -->
    // Variables globales
    let checkedItems = 0;
    const totalItems = 10;

    // Funcionalidad del formulario de inspección
    document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.inspection-check');
    const issueButtons = document.querySelectorAll('.issue-btn');
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');

    // Manejar cambios en checkboxes
    checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
    const issueBtn = this.parentElement.parentElement.querySelector('.issue-btn');

    if (this.checked) {
    checkedItems++;
    issueBtn.classList.add('hidden');
    this.parentElement.parentElement.classList.remove('border-red-200', 'bg-red-50');
    this.parentElement.parentElement.classList.add('border-green-200', 'bg-green-50');
} else {
    checkedItems--;
    issueBtn.classList.remove('hidden');
    this.parentElement.parentElement.classList.remove('border-green-200', 'bg-green-50');
    this.parentElement.parentElement.classList.add('border-red-200', 'bg-red-50');
}

    updateProgress();
});
});

    // Manejar botones de problema
    issueButtons.forEach(button => {
    button.addEventListener('click', function() {
    const target = this.getAttribute('data-target');
    const checkbox = document.getElementById(target);
    const itemText = checkbox.getAttribute('data-item');
    openIssueModal(itemText);
});
});
});

    // Actualizar barra de progreso
    function updateProgress() {
    const percentage = (checkedItems / totalItems) * 100;
    document.getElementById('progressBar').style.width = percentage + '%';
    document.getElementById('progressText').textContent = `${checkedItems}/${totalItems}`;

    // Cambiar color de la barra según el progreso
    const progressBar = document.getElementById('progressBar');
    if (percentage < 50) {
    progressBar.className = 'bg-red-600 h-2 rounded-full transition-all duration-300';
} else if (percentage < 80) {
    progressBar.className = 'bg-yellow-600 h-2 rounded-full transition-all duration-300';
} else {
    progressBar.className = 'bg-green-600 h-2 rounded-full transition-all duration-300';
}
}

    // Abrir modal de problemas
    function openIssueModal(componentName) {
    document.getElementById('modalComponent').value = componentName;
    document.getElementById('issueModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

    // Cerrar modal de problemas
    function closeIssueModal() {
    document.getElementById('issueModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

    // Manejar envío del formulario principal
    document.getElementById('inspectionForm').addEventListener('submit', function(e) {
    e.preventDefault();

    if (checkedItems === totalItems) {
    alert('✅ Inspección completada exitosamente!\n\nTodos los elementos han sido revisados y están en buen estado.');
} else {
    const remaining = totalItems - checkedItems;
    if (confirm(`⚠️ Inspección incompleta!\n\nQuedan ${remaining} elementos por revisar.\n¿Desea continuar de todas formas?`)) {
    alert('Inspección guardada con elementos pendientes.');
}
}
});

    // Cerrar modal al hacer clic fuera
    document.getElementById('issueModal').addEventListener('click', function(e) {
    if (e.target === this) {
    closeIssueModal();
}
});

    // Funcionalidad del panel de mantenimiento
    document.querySelector('.bg-green-600.hover\\:bg-green-700').addEventListener('click', function(e) {
    e.preventDefault();

    const tipo = this.parentElement.querySelector('select').value;
    const fecha = this.parentElement.querySelector('input[type="date"]').value;
    const hora = this.parentElement.querySelector('input[type="time"]').value;

    if (!fecha || !hora) {
    alert('⚠️ Por favor complete todos los campos requeridos');
    return;
}

    alert(`✅ Mantenimiento agendado exitosamente!\n\nTipo: ${tipo}\nFecha: ${fecha}\nHora: ${hora}`);

    // Limpiar formulario
    this.parentElement.querySelectorAll('input, select, textarea').forEach(field => {
    field.value = '';
});
});

    // Animaciones de hover mejoradas
    document.querySelectorAll('.inspection-check').forEach(checkbox => {
    const container = checkbox.parentElement.parentElement;

    container.addEventListener('mouseenter', function() {
    if (!checkbox.checked) {
    this.classList.add('shadow-md', 'scale-102');
}
});

    container.addEventListener('mouseleave', function() {
    this.classList.remove('shadow-md', 'scale-102');
});
});
