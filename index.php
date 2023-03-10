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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

<!--Boot Strap css-->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootsrap.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  


    <title>Home</title>

</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
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
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                OIL GUIDE 
              </h2>
              <h1>
		Guide Lines
                 <br />
                how to change 
		<br />
		oil by yourself 
              </h1>
              <div>
                <a href="login.php">
                  GUIDELINES
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="images/slider-img 1.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="images/slider-img 3.png" alt="" />
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
    <!-- footer section Starts -->
    <section>
    
</section>
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
      <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>

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
