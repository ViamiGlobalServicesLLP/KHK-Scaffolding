<!DOCTYPE html>
<html lang="en">

<head>
  <title>K Ring Access Scaffold</title>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicons -->
  <link href="assets/img/logo/khk_logo.png" rel="icon" />
  <link href="assets/img/logo/khk_logo.png" rel="apple-touch-icon" />

  <!-- font awesome4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Vendor Css Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Vendor JS Files -->
  <script src="vendor/js/jquery-3.6.0.min.js"></script>

  <!-- Template Main File -->
  <link rel="stylesheet" href="css/mystyle.css" />
  <link rel="stylesheet" href="css/products.css" />
  <script type="text/javascript" src="jquery/main.js"></script>
  <script type="text/javascript" src="jquery/popup.js"></script>
</head>

<body>
  <!-- header -->
  <div id="header"></div>

  <!-- main container -->
  <div class="container-fluid products-container">

    <!-- sidebar Section -->
    <?php include"sidebar.html" ?>

    <!-- Product Section -->
    <section class="container col-lg-9 product-right">

      <!-- section title -->
      <header class="entry-header">
        <h3 class="entry-title">Rings</h3>

        <!-- breadcrumps -->
        <div class="breadcrumb">
          <div class="item"><a href="index.php">Home / </a></div>
        </div>

      </header>

      <!-- section body -->
      <main class="prdct-display">
        <!-- popupModal -->
        <div class="popupModal">
          <div class="col-md-3 left popupside">Left</div>
          <div class="col-md-9 right popupside">Right</div>
          <i class="fa fa-times closed" title="Close" aria-hidden="true"></i>
        </div>

        <!-- products gallary -->
        <div class="category-sec">

          <!-- K LOCK-INTERMEDIATE TRANSOMS -->

          <div class="cat-box">
            <a class="product_link" href="#">
              <!-- product Thumnail start -->
              <div class="productThumbnail">
                <!-- thumbnail container start -->
                <div class="thumbnail_container">
                  <img src="assets/img/prodct-img/md-forging-ring1.png" alt="" class="prduct-thumbnail" />
                </div>
                <!-- thumbnail container end -->

                <!-- product image gallary -->
                <div class="img_container">
                  <!-- The grid: four columns -->
                  <div class="cat_image_row">
                    <div class="cat_column">
                      <img src="assets/img/prodct-img/md-forging-ring1.png" alt="" class="image-types"
                        onclick="myFunction(this);" />
                    </div>

                  </div>
                </div>
                <!-- product image gallary end -->
              </div>
              <!-- product Thumnail end -->

              <!-- product title start -->
              <div class="prdct-title">
                <h6 class="prdct-heading">MD Forged Ring</h6>
              </div>
              <!-- product title end -->

              <!-- product Description start -->
              <div class="productDescription">
                <div class="product-content">
                  <h2 class="entry-title">MD Forged Ring</h2>
                  <!-- Inside Popup tab Gallary Content -->
                  <div class="tabContent">
                    <!-- The expanding image container -->
                    <div class="container tab-gallary">
                      <!-- Close the image -->
                      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                      <!-- Expanded image -->
                      <img id="expandedImg" class="tabImages" onclick="zoomin()" onclick="zoomout()" />
                      <!-- Image text -->
                      <div id="imgtext"></div>
                      <!-- Image Zoom -->
                      <div class="zoom-img">
                        <button type="button" onclick="zoomin()">
                          <i class="fa fa-search-plus" aria-hidden="true"></i>
                        </button>
                        <button type="button" onclick="zoomout()">
                          <i class="fa fa-search-minus" aria-hidden="true"></i>
                        </button>
                      </div>


                    </div>
                    <!-- The expanding image container End -->

                  </div>

                  <!-- Produt Details start -->
                  <p>
                  MD Forged Ring</p>
                  <!-- Produt Details end -->
                </div>
              </div>
              <!-- product Description End-->
            </a>
          </div>




        </div>

        <!-- related work start -->
        <div class="related-work"></div>
        <!-- related work end -->
      </main>
    </section>
  </div>

  <!-- footer -->
  <div id="footer"></div>
</body>

</html>