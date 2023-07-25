<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/EstampArte/App/views/Public/Css/estilo.css">
    <title>EstampArte</title>
</head>
<body>
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['logedin']) && $_SESSION['logedin']) {
    echo '<div class="menu">';
    echo '<a href="http://localhost/EstampArte/?C=UserController&M=__login_out">Cerrar Sesión</a>';
    echo '<a href="http://localhost/EstampArte/?C=ContactController&M=index">Contacto</a>';
    echo '<a href="http://localhost/EstampArte/?C=ShopController&M=index">Tienda</a>';
    echo '<a href="http://localhost/EstampArte/?C=UbicacionController&M=index">Ubicacion</a>';
    echo '</div>';
} else {
  include_once($vista);
}
?>

<div class="main-section">
  <div class="overlay text-center">
    <h1 class="title-3 ver-ali"> Bienvenido a la tienda,</h1>
    <span class="glitch-effect  title-2">ESTAMPARTE</span>
    <div class="title-4 let-white">
      <span>Diseños Originales</span>
      <span  class="espace">Crea tu propio Diseño</span>
      <span  class="espace">Expande tu look</span>
    </div>
  </div>
</div>
<!--Acerca de mi-->
<main>
<section class="products">
    <div class="categorie-card modelos-hombre tall-card">
      <h2>
        VIDEOJUEGOS
      </h2>
    </div>
    <div class="categorie-card modelos-mujer tall-card">
      <h2>
        ANIME
      </h2>
    </div>
    <div class="categorie-card accesorios tall-card">
      <h2>
       DISEÑA TU PLAYERA
      </h2>
    </div>
  </section>
</main>
<!--Tarjetas-->
<section class="hg-light">
  <h3 class="title-3 text-center"> Acerca de nosotros...</h3>
  <div class="d-flex-md">
    <div class="col-md-3">
      <div class="card">
        <h4 class="title-4 text-center">¿Quienes Somos?</h4>
        Somos un grupo de personas que buscan innovar y destacar en el mundo de la moda y la vestimenta, haciendonos destacar con nuestros ideales.
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
         <h4 class="title-4 text-center">Objetivo</h4>
         Buscamos una nueva experiencia de personalización de su ropa mediante una aplicacion web, haciendo que el cliente expanda su creatividad, y se quede satisfecho con nuestros productos.
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
         <h4 class="title-4 text-center">Mision</h4>
         Nuestra misión consiste en satisfacer la necesidad de nuestros clientes de contar con playeras exclusivas y personalizadas. Reconocemos que cada persona tiene su propio estilo y desea destacarse en la sociedad.
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
         <h4 class="title-4 text-center">Vision</h4>
         La visión que tenemos sobre nuestro negocio es llegar a ser una empresa reconocida que implementara una manera de diseñar tu vestimenta mediante una aplicación,con precios justos y accesibles, pero de igual manera, con experiencia en el mercado.
      </div>
    </div>
  </div>
</section>
<!--Pie de pagina-->
<section class="text-center main-a">
  <i class="fas fa-copyright">@2023 EstampArte</i>
</section>
</body>
</html>
