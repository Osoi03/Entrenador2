<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/login.css">
    <script defer src="./js/login.js"></script> <!-- Incluye el archivo JS -->
</head>
<body>
    <div class="container">
        <div class="login-section">
            <form class="login-form" id="loginForm">
                <h2>¡Bienvenido!</h2>
                <p>Empieza tu viaje al éxito</p>
                <div class="input-group">
                    <input type="text" id="username" placeholder="Nombre de usuario">
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Contraseña">
                </div>
                <button type="submit" class="login-btn">Iniciar sesión</button>
                <br>
                <p>O también con...</p>
                <div class="social-login">
                    <button type="button" class="google-login">Entrar con Google</button>
                    <button type="button" class="facebook-login">Entrar con Facebook</button>
                </div>
                <br>
                <button type="button" id="noAccountBtn" class="no-account-btn">¿No tienes cuenta?</button>
            </form>
        </div>
        <div class="register-section" id="registerSection">
            <form class="register-form" id="registerForm">
                <h2>Registro</h2>
                <p>Únete a nosotros</p>
                <div class="input-group">
                    <input type="text" id="registerUsername" placeholder="Nombre de usuario">
                </div>
                <div class="input-group">
                    <input type="password" id="registerPassword" placeholder="Contraseña">
                </div>
                <div class="input-group">
                    <input type="email" id="registerEmail" placeholder="Correo electrónico">
                </div>
                <button type="submit" class="register-btn">Registrarse</button>
                <br>
                <button type="button" id="backToLoginBtn" class="back-to-login-btn">Volver al inicio de sesión</button>
            </form>
        </div>
        <div class="image-section">
            <img src="./img/logo3.png" alt="Logo de la empresa">
        </div>
    </div>
    <footer>
        <!-- Contenido del pie de página -->
    </footer>
</body>
</html>
