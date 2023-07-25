<div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a la tienda EstampArte</h2>
                <p>Si ya tienes una cuenta, por favor inicia sesión aquí</p>
                <button id="myButton" >Iniciar Sesión</button>
            </div>
        </div>
        <form class="formulario" method="POST" action="http://localhost/EstampArte/?C=UserController&M=register">
            <h2 class="create-account">Crear una cuenta</h2>
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
            <p class="cuenta-gratis">Crea una cuenta gratis</p>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <input type="submit" id="btn-1" name="registro" value="Registrarse">
        </form>
    </div>
    <script>
  document.getElementById("myButton").addEventListener("click", function() {
    // Reemplaza "url_de_otra_pagina" con la URL de la página a la que deseas redireccionar
    window.location.href = "http://localhost/EstampArte/?C=UserController&M=CallFormLogin";
  });
</script>
