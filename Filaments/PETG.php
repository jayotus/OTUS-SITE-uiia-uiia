<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OCSI</title>
    <link rel="icon" href="../img/OTUS ICON/Eye.ico" type="image/x-icon">
    <link rel="stylesheet" href="filamentcolors.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/scrollbar.css">
    <link rel="stylesheet" href="../CSS/footer.css">

  </head>
  <body>
    
    <!-- Nav Bar -->
    <nav id="try" class="navbar sticky-top navbar-expand-sm bg-body-">
            
      <div class="container-xl my-1">
      <a href="../index.php">
      <img class="otus-logo" src="../img/OTUS ICON/OTUS LOGO v2.png" width="100%" height="41.44px" alt="OTUS LOGO">
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                  </li>

                  <div class="dropdown">
                      <button class="dropbtn active">PRODUCTS</button>
                      <div class="dropdown-content">
                        <a href="../printersandcopiers.php">Printers & Copiers</a>
                        <a href="../3dprinters.php">3D Printers</a>
                        <a href="../filaments_page.php">Filaments</a>
                      </div>
                    </div>

                  <li class="nav-item">
                      <a class="nav-link" href="../about.php">About</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="../contactus.php">Contact</a>
                  </li>

                  <!-- <li class="nav-item me-3">
                      <a class="nav-link" href="#">Support</a>
                  </li> -->
              </ul>
          </div>
      </div>
    </nav>
    <!-- End of navbar -->

    
    <!-- Product Details -->
    <div class = "card-wrapper">
      <div class = "cards">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "filament_image/PETG/petg_1.webp" alt = "filament image">
              <img src = "filament_image/PETG/petg_2.webp" alt = "filament image">
              <img src = "filament_image/PETG/petg_3.webp" alt = "filament image">
              <img src = "filament_image/PETG/petg_4.webp" alt = "filament image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "filament_image/PETG/petg_1.webp" alt = "filament image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "filament_image/PETG/petg_2.webp" alt = "filament image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "filament_image/PETG/petg_3.webp" alt = "filament image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "filament_image/PETG/petg_4.webp" alt = "filament image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">PETG Filament</h2>
          <a href = "https://www.facebook.com/CoLiDo.Philippines" target="_blank" class = "product-link">Follow us on Facebook for More Updates</a>
          
          <!-- Rating -->
          <!-- <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div> -->

          <!-- <div class = "product-price">
            <p class = "last-price">Old Price: <span>$257.00</span></p>
            <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
          </div> -->

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p>COLIDO Toughness-Enhanced PETG Filament is a premium material known for its durability and clarity. It allows for easy printing with minimal warping and clogging, resulting in smooth and reliable prints. With a precise diameter and tangle-free filament, this material is compatible with most 3D printers and offers excellent results for your creative projects.</p>
            
            <ul>
              <li>Colors: <span>Black, Grey, White, Blue, Red, Orange, Yellow, Green</span></li>
              <li>Available: <span>In stock</span></li>
              <li>Category: <span>Filament</span></li>
              <li>Shipping Area: <span>Philippines</span></li>
              <!-- <li>Shipping Fee: <span>Free</span></li> -->
            </ul>
          </div>

          <!-- Add To Cart -->
          
          <!-- <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn">Compare</button>
          </div> -->

           <!-- End of Add To Cart -->

          <!-- <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div> -->

          <div class = "social-links">
            <p>Visit Our Online Store: </p>
            <a href = "https://shopee.ph/otuscopysystemsincsales?uls_trackid=505emtlp00km&utm_content=mjNpoGYEvizsp1gPeg6YfBBZqZZ" target="_blank">
              <img class="shopee-btn" src="../img/shopee_2.jpg" crossorigin="anonymous">
            </a>
            <a href = "https://www.lazada.com.ph/shop/otuscopysystems-inc?spm=a211g0.store_hp.more_popup.share_this_store&dsource=share&laz_share_info=1049817853_100_200_3207761_1049816878_null&laz_token=2b7a1ab448f42aff099c6b63465fcc1f&exlaz=e_fCrSdbgHdOXGip8qo24MCZFmNCmP6gU%2FnnWa525VocjCXvTKdNAtBZ%2BXixeNsL9T3OAsIU4iCyPgpnWXCnLXHOc2Yq2YLbuBD3WnASIas1Y%3D&sub_aff_id=social_share&sub_id2=1049817853&sub_id3=3207761&sub_id6=CPI_EXLAZ" target="_blank">
              <img src="../img/new LAZADA.png" crossorigin="anonymous">
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Product Details -->

    
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <img src="../img/OTUS ICON/Eye.ico" alt="OTUS" width="35" height="35">
              </a>
              <span class="mb-3 mb-md-0 text-body-secondary">&copy; <script>document.write(new Date().getFullYear())</script> OTUS COPY SYSTEM INC.</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" target="_blank" href="https://www.facebook.com/otussince2006"><img src="../img/footer/facebook.png" alt="facebook" width="25" height="25"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="../img/footer/instagram.png" alt="instagram" width="25" height="25"></a></li>
            
          </ul>
      </footer>
  </div>
  <!-- END FOOTER -->

  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/js/hs.slick-carousel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <script src="filament.js"></script>
</body>
</html>