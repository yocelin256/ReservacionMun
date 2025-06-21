<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MunClub</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceRestaurant
  * Template URL: https://bootstrapmade.com/nice-restaurant-bootstrap-template/
  * Updated: Jun 06 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <img src="assets/img/logo.png" alt="Logo" style="width: 130px; height: auto;">

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicio</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#book-a-table">Reservacion</a></li>
          <li><a href="#events">Eventos</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted d-none d-sm-block" href="#book-a-table">Reserva aqui</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container-fluid hero-container" data-aos="fade-up">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 content-col">
            <div class="content-wrapper">
              <div class="status-badge">Reservaciones Abiertas</div>
              <h2>Exclusividad, sabor y ambiente. Solo en Mun Club</h2>
              <p>Descubra un rincón donde la exclusividad se fusiona con el sabor y el ambiente. En Mun Club, cada plato es una obra de arte, cada detalle está cuidadosamente pensado 
                y cada momento está diseñado para cautivar sus sentidos.</p>

              <div class="opening-hours" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <span>Abierto todo los dias: 11:00am - 6:00pm</span>
              </div>

              <div class="btn-group">
                <a href="#book-a-table" class="btn btn-book">Reservar una mesa</a>
                <a href="#menu" class="btn btn-menu">Explora nuestro menu</a>
              </div>

              <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=61573146194185"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/munclub_aca?utm_source=ig_web_button_share_sheet&igsh=MXZiOXViYnc0ZmVwag=="><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@munclub_aca?is_from_webapp=1&sender_device=pc"><i class="bi bi-tiktok"></i></a>
                <a href="https://wa.me/5212211258721?text=Hola%20Mun%20Club%2C%20quisiera%20hacer%20una%20reservación"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 swiper-col">
            <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                  "delay": 5000
                  },
                  "effect": "fade",
                  "slidesPerView": 1,
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/club/entrada_mun.jpg" alt="Restaurant Ambience">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/club/sillas_mun.jpg" alt="Signature Dish">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/club/vista_mun.jpg" alt="Expert Chefs">
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
              <h3>La Esencia de Mun Club</h3>
              <p class="fst-italic">Ubicado en San Andr&eacute;s, Playa Encantada, Mun Club Acapulco es un oasis cerca de laguna de Tres Palos que te transportar&aacute; a un estado de total relajaci&oacute;n.</p>
              <p>Nacido de un sue&ntilde;o por traerle a los turistas y acapulque&ntilde;os un concepto &uacute;nico que abraza la belleza de la naturaleza, 
                Mun Club es un lugar que te har&aacute; vivir momentos inolvidables. &iexcl;Ven a disfrutar y descubrir Mun Club, el encanto de una jungla en Acapulco!</p>

              <div class="chef-signature mt-4">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/logo.jpeg" class="chef-avatar rounded-circle" alt="Chef Portrait">
                  </div>
                  <div class="col">
                    <p class="chef-message mb-2">&ldquo;Mun&rdquo; nace de la inspiraci&oacute;n en la luna llena reflejada sobre el lago, un espect&aacute;culo natural que transforma cada noche en una experiencia m&aacute;gica e inolvidable.</p>
                    <p class="chef-name">Mun Club</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
             <img src="assets/img/club/_VR_5437.jpg" class="img-fluid main-image shadow" style="width: 600px;" alt="En familia">
              <img src="assets/img/club/espectaculo.jpg" class="img-fluid accent-image shadow" style="width: 320px;" alt="Espectaculo">
              <!-- <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2005</span> -->
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 features-section">
          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-award"></i>
              </div>
              <h4>Award Winning</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-egg-fried"></i>
              </div>
              <h4>Fresh Ingredients</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Expert Team</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-heart"></i>
              </div>
              <h4>Cooked with Love</h4>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            </div>
          </div>
        </div>

        <!-- <div class="row mt-3">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="stats-container">
              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>+</span>
                <p class="stat-label">Years Experience</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span></span>
                <p class="stat-label">Expert Chefs</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="0" class="purecounter">3</span></span>
                <p class="stat-label">Culinary Awards</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="0" class="purecounter">15000</span>+</span>
                <p class="stat-label">Happy Customers</p>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </section><!-- /About Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Menu</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="menu-filters isotope-filters mb-5">
            <ul>
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-main">Main Courses</li>
              <li data-filter=".filter-dessert">Desserts</li>
              <li data-filter=".filter-drinks">Drinks</li>
            </ul>
          </div>

          <div class="menu-container isotope-container row gy-4">

            <!-- Regular Menu Items -->
            <div class="col-lg-6 isotope-item filter-starters">
              <div class="menu-item d-flex align-items-center gap-4">
                <img src="assets/img/restaurant/starter-2.webp" alt="Starter" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Bruschetta Trio <span class="menu-tag">Vegetarian</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$8.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-starters">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/starter-5.webp" alt="Starter" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Calamari Fritti <span class="menu-tag">Seafood</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$10.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-main">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/main-1.webp" alt="Main Course" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Wild Mushroom Risotto <span class="menu-tag">Vegetarian</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$18.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-main">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/main-4.webp" alt="Main Course" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Braised Lamb Shank <span class="menu-tag">Chef's Choice</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$26.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-dessert">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/dessert-2.webp" alt="Dessert" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Chocolate Lava Cake <span class="menu-tag">Gluten Free</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$9.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-dessert">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/dessert-7.webp" alt="Dessert" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Tiramisu <span class="menu-tag">Classic</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$8.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-drinks">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/drink-3.webp" alt="Drink" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Signature Cocktail <span class="menu-tag">Alcoholic</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$12.95</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-drinks">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="assets/img/restaurant/drink-8.webp" alt="Drink" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Berry Smoothie <span class="menu-tag">Non-Alcoholic</span></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sed.</p>
                  <div class="price">$7.95</div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center mt-5" data-aos="fade-up">
          <a href="#" class="download-menu">
            <i class="bi bi-file-earmark-pdf"></i> Download Full Menu
          </a>
        </div>

        <!-- Chef's Specials -->
        <div class="col-12 mt-5" data-aos="fade-up">
          <div class="specials-badge">
            <span><i class="bi bi-award"></i> Chef's Specials</span>
          </div>
          <div class="specials-container">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="menu-item special-item">
                  <div class="menu-item-img">
                    <img src="assets/img/restaurant/main-3.webp" alt="Special Dish" class="img-fluid">
                    <div class="menu-item-badges">
                      <span class="badge-special">Special</span>
                      <span class="badge-vegan">Vegan</span>
                    </div>
                  </div>
                  <div class="menu-item-content">
                    <h4>Mediterranean Grilled Salmon</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut aliquam metus. Vivamus fermentum magna quis.</p>
                    <div class="menu-item-price">$24.99</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-item special-item">
                  <div class="menu-item-img">
                    <img src="assets/img/restaurant/main-7.webp" alt="Special Dish" class="img-fluid">
                    <div class="menu-item-badges">
                      <span class="badge-special">Special</span>
                      <span class="badge-spicy">Spicy</span>
                    </div>
                  </div>
                  <div class="menu-item-content">
                    <h4>Signature Ribeye Steak</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan risus ut dui pretium, eget elementum nisi.</p>
                    <div class="menu-item-price">$32.99</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/person/person-m-12.webp" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/person/person-m-13.webp" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Chefs</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-5">
            <div class="chef-highlight" data-aos="fade-right" data-aos-delay="200">
              <figure class="chef-image">
                <img src="assets/img/restaurant/chef-1.webp" class="img-fluid" alt="Executive Chef">
              </figure>
              <div class="chef-details">
                <h3>Executive Chef</h3>
                <h2>Gabriel Turner</h2>
                <div class="chef-awards">
                  <span><i class="bi bi-star-fill"></i> James Beard Award</span>
                  <span><i class="bi bi-star-fill"></i> Two Michelin Stars</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit.</p>
                <div class="chef-signature">
                  <img src="assets/img/misc/signature-1.webp" alt="Chef Signature">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="team-container" data-aos="fade-left" data-aos-delay="300">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="chef-img">
                      <img src="assets/img/restaurant/chef-2.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Sophia Martinez</h4>
                      <p class="role">Pastry Chef</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="chef-img">
                      <img src="assets/img/restaurant/chef-3.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Marcus Chen</h4>
                      <p class="role">Sous Chef</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="chef-img">
                      <img src="assets/img/restaurant/chef-4.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Jonathan Williams</h4>
                      <p class="role">Head of Bar</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="chef-img">
                      <img src="assets/img/restaurant/chef-5.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Isabella Romano</h4>
                      <p class="role">Grill Master</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="reservation-info">
              <div class="text-content">
                <h3>Book Your Table</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Aliquam erat volutpat.</p>

                <div class="reservation-details mt-4">
                  <div class="detail-item">
                    <i class="bi bi-clock"></i>
                    <div>
                      <h5>Opening Hours</h5>
                      <p>Monday - Friday: 11:00 AM - 11:00 PM<br>
                        Saturday - Sunday: 10:00 AM - 12:00 AM</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h5>Location</h5>
                      <p>1234 Main Street, Suite 100<br>
                        Boston, MA 02110</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <h5>Call Us</h5>
                      <p>+1 (617) 555-1234</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="reservation-image">
              <img src="assets/img/restaurant/showcase-7.webp" alt="Restaurant interior" class="img-fluid rounded">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="reservation-form-wrapper">
              <div class="form-header">
                <h3>Book A Table</h3>
                <p>Please fill the form below to make a reservation</p>
              </div>

              <form action="forms/book-a-table.php" method="POST" role="form" class="php-email-form mt-4">
                <div class="row gy-4">
                  <div class="col-lg-4 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Introduce tu nombre" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Introduce tu correo" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Telefono" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <select name="people" class="form-select" required="">
                      <option value="">Numero de personas</option>
                      <option value="1">1 Persona</option>
                      <option value="2">2 Personas</option>
                      <option value="3">3 Personas</option>
                      <option value="4">4 Personas</option>
                      <option value="5">5 Personas</option>
                      <option value="6">6+ Personas</option>
                    </select>
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                  </div>

                  <div class="form-group mt-4">
                    <textarea class="form-control" name="message" rows="3" placeholder="Algun comentario que guste agregar (opcional)"></textarea>
                  </div>
                </div>


                <div class="text-center mt-4">
                  <button type="submit" class="btn-book-table">Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Location Section -->
    <section id="location" class="location section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4533.201215967963!2d-99.6487858!3d16.6957289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ca436d23cb6d27%3A0x147cb361f2fa3ba6!2sMun%20Beach%20Club!5e1!3m2!1ses!2smx!4v1749857583089!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="info-container">
              <div class="section-header">
                <h2>Find Us</h2>
                <p>Visit Us Today</p>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Location</h3>
                  <p>123 Culinary Avenue, Manhattan, NY 10001</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="info-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-content">
                  <h3>Reservations</h3>
                  <p>+1 (212) 555-7890</p>
                  <p class="small-text">We recommend making reservations at least 48 hours in advance</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="info-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="info-content">
                  <h3>Hours</h3>
                  <div class="hours-grid">
                    <div class="day">Monday - Thursday</div>
                    <div class="time">11:00 AM - 10:00 PM</div>

                    <div class="day">Friday - Saturday</div>
                    <div class="time">11:00 AM - 11:30 PM</div>

                    <div class="day">Sunday</div>
                    <div class="time">10:00 AM - 9:00 PM</div>

                    <div class="day">Brunch Hours</div>
                    <div class="time">Sat &amp; Sun, 10:00 AM - 2:00 PM</div>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-book">Make a Reservation</a>
                <a href="#" class="btn-contact">Contact Us</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Location Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="intro-text text-center mb-5" data-aos="fade-up" data-aos-delay="150">
          <h2>Create Unforgettable Moments</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
        </div>

        <div class="event-types">
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-calendar-heart"></i>
                </div>
                <h3>Weddings &amp; Celebrations</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                <span class="capacity">Up to 150 guests</span>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Corporate Events</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                <span class="capacity">Up to 100 guests</span>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-people"></i>
                </div>
                <h3>Private Gatherings</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                <span class="capacity">Up to 50 guests</span>
              </div>
            </div>
          </div>
        </div>

        <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="150">
          <div class="row g-3">
            <div class="col-lg-8">
              <div class="main-image" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/restaurant/event-1.webp" alt="Event Space" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                    <img src="assets/img/restaurant/event-5.webp" alt="Event" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/restaurant/event-7.webp" alt="Event" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="event-cta" data-aos="fade-up" data-aos-delay="200">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3>Ready to plan your special event?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo magna. Contact us today to discuss your requirements.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="#" class="btn-reserve">Reserve Venue</a>
            </div>
          </div>
        </div>

        <div class="featured-events" data-aos="fade-up" data-aos-delay="200">
          <h3>Upcoming Featured Events</h3>

          <div class="row g-4">
            <div class="col-lg-6 col-md-6">
              <div class="featured-event-card" data-aos="fade-up" data-aos-delay="250">
                <div class="event-date">
                  <span class="month">Jun</span>
                  <span class="day">18</span>
                </div>
                <div class="event-content">
                  <div class="event-image">
                    <img src="assets/img/restaurant/event-3.webp" alt="Summer Wine Festival" class="img-fluid">
                  </div>
                  <div class="event-info">
                    <h4>Summer Wine Festival</h4>
                    <ul class="event-meta">
                      <li><i class="bi bi-clock"></i> 6:00 PM - 10:00 PM</li>
                      <li><i class="bi bi-geo-alt"></i> Garden Terrace</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo magna dolor sit amet.</p>
                    <a href="#" class="btn-details">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="featured-event-card" data-aos="fade-up" data-aos-delay="300">
                <div class="event-date">
                  <span class="month">Jul</span>
                  <span class="day">05</span>
                </div>
                <div class="event-content">
                  <div class="event-image">
                    <img src="assets/img/restaurant/event-8.webp" alt="Gourmet Tasting Night" class="img-fluid">
                  </div>
                  <div class="event-info">
                    <h4>Gourmet Tasting Night</h4>
                    <ul class="event-meta">
                      <li><i class="bi bi-clock"></i> 7:30 PM - 11:00 PM</li>
                      <li><i class="bi bi-geo-alt"></i> Main Dining Hall</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo magna dolor sit amet.</p>
                    <a href="#" class="btn-details">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p>1842 Maple Avenue, Portland, Oregon 97204</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>Sunday-Fri: 9 AM - 6 PM</p>
                <p>Saturday: 9 AM - 4 PM</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Google Maps (Full Width) -->
      <div class="map-section" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4533.201215967963!2d-99.6487858!3d16.6957289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ca436d23cb6d27%3A0x147cb361f2fa3ba6!2sMun%20Beach%20Club!5e1!3m2!1ses!2smx!4v1749857583089!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Contact Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Get in Touch</h2>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-person"></i>
                        <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-text-left"></i>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-chat-dots message-icon"></i>
                        <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required=""></textarea>
                      </div>
                    </div>
                  </div>

               

                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">NiceRestaurant</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">NiceRestaurant</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".php-email-form");

    form.addEventListener("submit", function (e) {
      // Mostrar SweetAlert "Cargando..." justo antes de enviar
      Swal.fire({
        title: "Procesando...",
        text: "Estamos guardando tu reservación",
        icon: "info",
        allowOutsideClick: false,
        showConfirmButton: false,
        didOpen: () => {
          Swal.showLoading();
          // Enviar el formulario después de mostrar loading
          form.submit(); // permite que se envíe normalmente
        }
      });

      // Evitar que se envíe inmediatamente, para que se vea el "loading"
      e.preventDefault();
    });
  });
</script>


</body>

</html>