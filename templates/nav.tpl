<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark w-100
{if $isNavbarHome == 'true'}
  es-true bg-orange-gradient fixed-top navbar-home 
{else}
  es-false bg-orange sticky-md-top mb-5
{/if}">
  <div class="container-xl">
    <a class="navbar-brand" href="home">
      <img src="images/BrandLogo.webp">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end align-items-end" id="navbarNav">
      <ul class="navbar-nav align-items-end">
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold active" aria-current="page" href="home">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold" href="news">Novedades</a>
        </li>
        <li class="nav-item fs-5 fw-bolder">
          <a class="nav-link" href="shop">Tienda</a>
        </li>
        <li class="nav-item fs-5 fw-bolder">
          <a class="nav-link" href="contact">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
  <script src="js/nav.js"></script>
</nav>