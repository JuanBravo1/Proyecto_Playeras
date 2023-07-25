<div class="container-form sign-in">
        <form class="formulario" method="POST" action="http://localhost/EstampArte/?C=UserController&M=login">
            <h2 class="create-account">Iniciar Sesión</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-facebook'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-google' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-instagram' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aún no tienes cuenta?</p>
            <input type="email" name="correo" placeholder="Email" required>
            <input type="password" name="contra" placeholder="Contraseña" required>
            <input type="submit" id="btn-2" name="inicio_sesion" value="Iniciar Sesión">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si ya tienes una cuenta, por favor regístrate aquí</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
            <button class="admin-login-btn">¿Eres administrador? Iniciar Sesión</button>
        </div>
    </div> 
    <script>
  document.querySelector(".sign-in-btn").addEventListener("click", function() {
    // Reemplaza "url_de_otra_pagina" con la URL de la página a la que deseas redireccionar
    window.location.href = "http://localhost/EstampArte/?C=UserController&M=CallFormAdd";
  });
</script>

<script>
  // Agregar evento click para el botón de inicio de sesión para administradores
  document.querySelector(".admin-login-btn").addEventListener("click", function() {
    // Reemplazar "url_del_login_de_admin" con la URL de la página de inicio de sesión para administradores
    window.location.href = "http://localhost/EstampArte/?C=AdminController&M=CallFormLogin";
  });
</script>
