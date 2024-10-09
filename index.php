<?php include("header.php"); 

?>
<main id="main" class="main">
  <section class="section dashboard home">
    <div class="welcome-section d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 text-center">
            <h2>Welcome to UpConstruction</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          </div>
        </div>
      </div>
      <!-- Colocamos el mousey fuera del contenedor principal -->
      <div class="scroll-downs">
        <div class="mousey">
          <div class="scroller"></div>
        </div>
      </div>
    </div>
  </section>



  <!-- About Section -->
  <section id="about" class="about section mt-5">
    <div class="container">
      <div class="row ">


        <div class="col-lg-7  ">
          <div class="our-story ">
            <h4>Est 1988</h4>
            <h3>Our Story</h3>
            <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul>
            <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

            <div class="watch-video d-flex align-items-center position-relative">
              <i class="bi bi-play-circle"></i>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div id="carouselExample" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/hero-carousel/hero-carousel-1.jpg" class="img-fluid" alt="Imagen descriptiva" style="width: 100%;">
              </div>
              <div class="carousel-item">
                <img src="assets/img/hero-carousel/hero-carousel-2.jpg" class="img-fluid" alt="Imagen descriptiva" style="width: 100%;">
              </div>
              <div class="carousel-item">
                <img src="assets/img/hero-carousel/hero-carousel-3.jpg" class="img-fluid" alt="Imagen descriptiva" style="width: 100%;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>

    </div>
    <hr>
  </section><!-- /About Section -->




  <!-- Projects Section -->
  <section id="projects" class="projects section mt-5">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h4 class="titulos">Galería</h4>

      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/remodeling-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/construction-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/repairs-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->


        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Projects Section -->

</main><!-- End #main -->



<?php include("footer.php"); ?>