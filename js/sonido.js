document.getElementById('bajaForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el envío del formulario para que podamos verificar los campos

    const userName = document.getElementById('userName').value.trim();
    const errorSound = document.getElementById('errorSound');
    const successSound = document.getElementById('successSound');

    if (!userName) {
        // Si el campo está vacío, reproducir el sonido de error
        errorSound.play();
    } else {
        // Si hay datos en el campo, reproducir el sonido de éxito
        successSound.play();
        // Aquí puedes enviar el formulario si lo deseas, eliminando el `preventDefault`:
        this.submit();
    }
});
document.getElementById('altaForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const userName = document.getElementById('userName').value.trim();
    const errorSound = document.getElementById('errorSound');
    const successSound = document.getElementById('successSound');

    if (!userName) {
        errorSound.play();
    } else {
        successSound.play();
        this.submit(); // Enviar el formulario si tiene datos
    }
});
document.getElementById('modificacionForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const userName = document.getElementById('userName').value.trim();
    const errorSound = document.getElementById('errorSound');
    const successSound = document.getElementById('successSound');

    if (!userName) {
        errorSound.play();
    } else {
        successSound.play();
        this.submit(); // Enviar el formulario si tiene datos
    }
});
