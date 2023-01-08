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
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-14 col-md-18 col-lg-10 col-xl-10">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="container-fluid">Once you’ve found the dipstick, pull it out and wipe off all the oil with a cloth or rag. You should notice two marks on the dipstick itself, identifying the minimum and maximum oil levels.
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><img class="img-responsive" src="images/oilstick.jpg">
                                    </div>
                                    <div class="col-md-8">When it’s clean, put the dipstick back into its tube, pushing it all the way back in. Let it sit and then remove it again.</div>
                                </div>
                                <a href="oilcheck.php" class="btn btn-primary">&laquo; Previous</a>
                                    <a href="oilcheck2.php" class="btn btn-primary">Next &raquo;</a>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- footer section Starts -->
        <section>
           
    </section>
    <section class="container-fluid footer_section">
        <p>
            Design & Copyrights by
            <a href="https://herts.ac.uk/">22007515@herts.ac.uk</a>
        </p>
    </section>
    <!-- end footer section -->

    <!--script start -->


    <script type="text/javascript" src="css/jscss.js"></script>
    <script type="text/javascript" src="css/bootstrapcss.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>

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