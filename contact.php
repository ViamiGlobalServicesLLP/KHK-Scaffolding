<html>
  <head>
    <title>Contact - KHK Scaffolding & Formwork LTD. L.L.C</title>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Favicons -->
  <link href="assets/img/logo/khk_logo.png" rel="icon">
  <link href="assets/img/logo/khk_logo.png" rel="apple-touch-icon">

  <!-- Vendor Css Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor JS Files -->
  <script src="vendor/js/jquery-3.6.0.min.js"></script>
  <script src="vendor/js/jquery.validate.min.js"></script>
  
  <!-- Template Main File -->
  <link rel="stylesheet" href="css/mystyle.css" />
  <script type="text/javascript" src="jquery/main.js"></script>
  <script type="text/javascript" src="jquery/validation.js"></script>  

  <!-- Page refresh after form submited  -->
    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
     <!-- Page refresh after form submited  -->
  </head>

  <body>
    <div id="header"></div>

    <!--Section heading-->
    <div class="container">
      <header>
        <h1 class="entry-title">Contact</h1>
      </header>

      <section class="mb-4">
        <div class="row">
          <!--Grid column start-->
          <div class="col-md-9 mb-md-0 mb-5 contact-details">
            <form id="contact_form" name="contact_form" action="" method="POST">
              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="username"
                      name="username"
                      class="c-form"
                      placeholder="Name"
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="company"
                      name="company"
                      class="c-form"
                      placeholder="Company"
                    />
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="phone_no"
                      name="phone_no"
                      class="c-form"
                      placeholder="Contact No."
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="designation"
                      name="designation"
                      class="c-form"
                      placeholder="Designation"
                    />
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="c-form"
                      placeholder="E-Mail"
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <select
                      type="text"
                      id="country"
                      name="country"
                      class="c-form"
                      placeholder="Country"
                    >
                      <option value="">Country</option>
                      <option value="Afghanistan">India</option>
                    </select>
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="product"
                      name="product"
                      class="c-form"
                      placeholder="Product"
                    />
                  </div>
                </div>
                <!--Grid column end-->

                <!--Grid column start-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="quantity"
                      name="quantity"
                      class="c-form"
                      placeholder="Quantity"
                    />
                  </div>
                </div>
                <!--Grid column end-->
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="row contact-row">
                <!--Grid column start-->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea
                      type="text"
                      id="message"
                      name="message"
                      rows="2"
                      class="c-form md-textarea"
                      placeholder="Message"
                    ></textarea>
                  </div>
                </div>
              </div>
              <!--Grid row end-->

              <!--Grid row start-->
              <div class="mt-5">
                <button type="submit" name="submit" class="btn_submit">
                  Send
                </button>
                <span class="ajax-loader">
                  <img src="assets/gif/ajax-loader.gif" alt="">
                </span>
                <div class="status"></div>
              </div>
              <!--Grid row end-->
            </form>
          </div>
          <!--Grid column end-->
        </div>
      </section>
      <!--Section: Contact v.2-->

      <div class="submit_success_msg mt-4">
        <?php include "contact_form_handler.php"; ?>
      </div>
    </div>

    <div id="footer"></div>
  </body>
</html>
