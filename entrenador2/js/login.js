document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const registerSection = document.getElementById('registerSection');
    const noAccountBtn = document.getElementById('noAccountBtn');
    const backToLoginBtn = document.getElementById('backToLoginBtn');

    // Manejo del formulario de inicio de sesión
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el comportamiento por defecto del formulario

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Aquí puedes agregar la lógica para verificar el nombre de usuario y la contraseña
        // Por ejemplo, podrías hacer una solicitud a un servidor para verificar las credenciales

        if (username === 'admin' && password === 'admin123') {
            alert('Inicio de sesión exitoso');
            // Redirigir al usuario a otra página o realizar alguna acción
            window.location.href = 'index2.php';
        } else {
            alert('Nombre de usuario o contraseña incorrectos');
        }
    });

    // Mostrar el formulario de registro y ocultar el de inicio de sesión
    noAccountBtn.addEventListener('click', () => {
        loginForm.style.display = 'none';
        registerSection.classList.add('active');
    });

    // Volver al formulario de inicio de sesión
    backToLoginBtn.addEventListener('click', () => {
        registerSection.classList.remove('active');
        setTimeout(() => {
            loginForm.style.display = 'flex';
        }, 500); // Espera a que la transición termine antes de mostrar el formulario de inicio de sesión
    });

    document.querySelector('.google-login').addEventListener('click', function() {
        alert('Funcionalidad de inicio de sesión con Google en construcción.');
        // Aquí puedes agregar la lógica para el inicio de sesión con Google
    });

    document.querySelector('.facebook-login').addEventListener('click', function() {
        alert('Funcionalidad de inicio de sesión con Facebook en construcción.');
        // Aquí puedes agregar la lógica para el inicio de sesión con Facebook
    });
});
