<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>

<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Stylesheet css -->
  <link href="css/style.css" rel="stylesheet">
  <!-- fonts css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />

  <!--Boot Strap css-->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootsrap.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


  <title>GUIDELINES</title>

</head>

<body>
  <div class="hero_area">
    <!-- header section start -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span>
              
              Xavier
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">HOME</a>
                <a href="login.php">GUIDELINES</a>
            
                <a href="contact.php">CONTACT US</a>

              </div>

            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="my-5">Hi, <b>
                      <?php echo htmlspecialchars($_SESSION["username"]); ?>
                    </b>. Welcome to our Guidelines.</h2>
                    <p>
                    <a href="oilcheck.php" class="btn btn-primary">GUIDELINES for oil check</a>
</p>
<p>
                    <a href="oilchange.php" class="btn btn-primary">GUIDELINES for oil change</a>    
</p>
                  
                </div>
                
              </div>
              <p>

                    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                  </p>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>


    <!-- footer section Starts -->

    <section class="container-fluid footer_section">
      <p>
        Design by
        <a href="https://herts.ac.uk/">22007515@herts.ac.uk</a>
      </p>
    </section>
    <!-- end footer section -->

    <!--script start -->


    <script type="text/javascript" src="css/jscss.js"></script>
    <script type="text/javascript" src="css/bootstrapcss.js"></script>



    <script>
      $(document).ready(function () {
        $('#Makers-dropdown').on('change', function () {
          var Makers_id = this.value;
          $.ajax({
            url: "mm.php",
            type: "POST",
            data: {
              Makers_id: Makers_id
            },
            cache: false,
            success: function (result) {
              $("#Model-dropdown").html(result);
              $('#YOM-dropdown').html('<option value="">Select Model First</option>');
            }
          });
        });
        $('#Model-dropdown').on('change', function () {
          var Model_id = this.value;
          $.ajax({
            url: "YOM.php",
            type: "POST",
            data: {
              Model_id: Model_id
            },
            cache: false,
            success: function (result) {
              $("#YOM-dropdown").html(result);
            }
          });
        });
      });
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>
    <!--Scripts end-->
</body>
</head>

</html>