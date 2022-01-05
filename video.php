<!doctype html>
<html lang="en">
<head>
  <title>Videos</title>
  
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Favicons -->
  <link href="assets/img/logo/khk_logo.png" rel="icon">
  <link href="assets/img/logo/khk_logo.png" rel="apple-touch-icon">

  <!-- font awesome4 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700">

  <!-- Vendor Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="vendor/js/jquery-3.6.0.min.js"></script>

  <!-- Template Main File -->
  <link rel="stylesheet" href="css/mystyle.css" />
  <script type="text/javascript" src="jquery/main.js"></script>
</head>

<body>
  <!-- header -->
  <div id="header"></div>

  <!-- Video Section -->
  <section class=" container-fluid video-sec">
    <main class="video-row ">
      <div class="videos">
        <!-- videos -->
        <header class="entry-header">
          <h3 class="entry-title">VIDEOS</h3>
        </header>
        <!-- Gallary-1 start -->
        <div class="videoGallary">
          <div class="videoThumbnail">
            <img src="assets/video/Corporate.jpg" alt="" class="video-thumbnail">
            <h6 class="video-title">Corporate</h6>
          </div>
          <div class="khkvideo">
            <video class="video" width="75%" controlsList="nodownload" controls >
              <source src="assets/video/corporate.mp4" poster="assets/video/Corporate.jpg">
            </video>
          </div>
        </div>
        <!-- Gallary-1 End -->
         <!-- Gallary-2 start-->
        <div class="videoGallary">
          <div class="videoThumbnail">
            <img src="assets/video/tube-mt.jpg" alt="" class="video-thumbnail">
            <h6 class="video-title">Tube Mill</h6>
          </div>
          <div class="khkvideo">
            <video class="video" width="75%" controlsList="nodownload" controls >
              <source src="assets/video/Tube-Mill-Manufacturing.mp4" poster="assets/video/tube-mt.jpg">
            </video>
          </div>
        </div>
         <!-- Gallary-2 End -->
         <!-- Gallary-3 start-->
        <div class="videoGallary">
          <div class="videoThumbnail">
            <img src="assets/video/ep.jpg" alt="" class="video-thumbnail">
            <h6 class="video-title">Extrusion Plant</h6>
          </div>
          <div class="khkvideo">
            <video class="video" width="75%" controlsList="nodownload" controls >
              <source src="assets/video/Extrusion-Plant.mp4" poster="assets/video/ep.jpg">
            </video>
          </div>
          
        </div>
        <!-- Gallary-2 End -->
      </div>
    </main>
  </section>

  <!-- Popupbox -->
  <div class="popupBox">
    <i class="fa fa-times close" title="Close" aria-hidden="true"></i>
    <div class="Full popupside">Full</div>
  </div>

  <script>
    $(document).ready(function () {
      $(".popupBox").hide();
      $(".khkvideo").hide();

      $('.videoThumbnail').on('click', function (event) {

        var post_content = $(this).siblings('.khkvideo').html()
        $('.Full').html(post_content);
        $(".popupBox").show();

      });

      $(".close").on("click", function () {
        $('.video').trigger('pause');
        $(".popupBox").hide();              
      });

    });
  </script>

  <!-- footer -->
  <div id="footer"></div>
</body>
</html>