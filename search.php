<html>
<head>
  <title> KHK Scaffolding & Formwork LTD. L.L.C</title>

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

  <!-- Template Main File -->
  <link rel="stylesheet" href="css/mystyle.css" />
  <link rel="stylesheet" href="css/products.css" />
  <script type="text/javascript" src="jquery/main.js"></script>
  <script type="text/javascript" src="jquery/popup.js"></script>

</head>
<body>
  <div id="header"></div>

  <!-- search Results -->
  <div class="container">
      <h1>Search Results for <?php echo $_POST['search'] ?></h1>
      <div class="result">
          
      </div>


  <div id="footer"></div>
</body>
</html>



<?php

if (isset($_POST['submit'])) {
    if ($_POST['search'] == "") {
        echo "error: all fields are required";
		header("location:pageNotFound.php");

    } else {
        echo "proceed...";
		
    }
}
?>

