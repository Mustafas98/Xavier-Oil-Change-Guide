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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


            <title>Login</title>

        </head>
        <body>
            <div class="hero_area">
        <!-- header section start -->
        <header class="header_section">
            <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
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
                <a href="index.html">HOME</a>
                <a href=".html">GUIDELINES</a>
                <a href="">FEATURE</a>
                <a href="contact.html">CONTACT US</a>
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
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="forgetpass.html">Forgot password?</a></p>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
  
                
  
              </div>
  
              <div>
                <p class="mb-0">Don't have an account? <a href="singup.html" class="text-white-50 fw-bold">Sign Up</a>
                </p>
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
    </head>
</html>
<?php

echo "this is a test file";
$email = $_POST['email'];
$password = $_POST['password'];

// Data connnection here 
$con = new mysqli("localshot", "root", "test");
if($con->connect_error)
{
	die("failed to coonect :" .$con->connect_error);
	
} else {
	
	$stmt = $con->prepare("select * from registration where email= ? " )
		$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows >0)
	{
		$data = $stmt_result->fetch_assoc();
		if($data['password']===$password) {
			echo "<h2> Login Successful</h2>";
	} else { echo"<h2> Invalid Email or passowrd</h2>";
		   }
}


?>