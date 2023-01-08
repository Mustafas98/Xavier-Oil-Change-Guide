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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <link href="css/responsive.css" rel="stylesheet">
  <title>Contact</title>

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

                  <h2 class="fw-bold mb-2 text-uppercase">Contact us</h2>
                  <p class="text-white-50 mb-5">Do you have any questions? Please do not hesitate to contact us
                    directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                  <form action="pro.php" method="POST">
                    <div class="form-group">
                      <label>Name:</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Email:</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Message:</label>
                      <textarea class="form-control" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                  </form>



                </div>

              </div>

            </div>
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
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
  <!--Scripts end-->
</body>