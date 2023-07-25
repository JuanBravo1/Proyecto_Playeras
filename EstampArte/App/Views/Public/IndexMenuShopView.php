<div class="main-section">
  <div class="overlay text-center">
    <h1 class="title-3 ver-ali"> </h1>
    
    <span class="glitch-effect  title-2">DISEÑOS ANIME</span>
  </div>
</div>

<main> 
<!-- CARUSSEL -->
<section class="carusel-section">
  <div class="carusel-container">
    <div class="carusel-slide">
      <img src="http://localhost/EstampArte/App/Views/Public/Resources/Carrousel/Men.jpeg" alt="Imagen 1">
    </div>
    <div class="carusel-slide">
      <img src="http://localhost/EstampArte/App/Views/Public/Resources/Carrousel/Woman.jpg" alt="Imagen 2">
    </div>
    <div class="carusel-slide">
      <img src="http://localhost/EstampArte\App\Views\Public\Resources\Carrousel\Design.jpeg" alt="Imagen 3">
    </div>
    <div class="carusel-slide">
      <img src="http://localhost/EstampArte\App\Views\Public\Resources\Carrousel\WW.jpeg" alt="Imagen 3">
    </div>
    <!-- Agrega más imágenes aquí según tus necesidades -->
  </div>
 
  <div class="carusel-navigation">
    <span class="prev" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></span>
    <span class="next" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></span>
  </div>
</section>
</main>

<div class="main-section2">
  <div class="overlay text-center">
    <h1 class="title-3 ver-ali"> </h1>
    
    <span class="glitch-effect  title-2">DISEÑOS VIDEOJUEGOS</span>
  </div>
</div>


<section class="text-center main-a">
  <i class="fas fa-copyright">@2023 EstampArte</i>
</section>

<!-- JavaScript para el carrusel -->
<script>
  let slideIndex = 1;
  showSlide(slideIndex);

  function changeSlide(n) {
    showSlide(slideIndex += n);
  }

  function showSlide(n) {
    let slides = document.getElementsByClassName("carusel-slide");
    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }

  // Cambiar de diapositiva automáticamente cada 3 segundos
  setInterval(() => {
    changeSlide(1);
  }, 3000);
</script>