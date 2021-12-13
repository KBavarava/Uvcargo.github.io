<?php
  session_start();    
?>
<html>
  <head> 
   <script src="./removeBanner.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uv Cargo & Logisty Customer </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link href="logo.png" rel="icon">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
           
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">UV</strong><strong>CUSTOMER</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">U</strong><strong>C</strong></div></a>
           
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
          
            <!-- Log out  -->              
            <div class="list-inline-item logout">                  
               <a id="logout" href="..\clogin\index.php" class="btn btn-warning"> Logout </a></div>
          </div>

        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
          <h1 class="h5"><?php echo $_SESSION['user']; ?></h1>
            <p>UV CUSTOMER</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus <span class="heading">Main</span>-->
        <ul class="list-unstyled">
                <li class="active"><a href="index.php"> <i class="icon-home"></i>HOME </a></li>
                <li><a href="form.php"> <i class="icon-padnote"></i>Order Form Detail</a></li>
              <!--  <li><a href="payment.php"> <i class="icon-padnote"></i>Bill</a></li>-->
        </ul>        
                
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          
        </div>
  
        <section >
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="bar-chart block no-margin-bottom">
                 <h1> 
                 <div class="brand-text brand-big visible text-uppercase">
                  <center> <strong class="text-primary">Welcome &nbsp;</strong></center><br>
                  <center> <strong>UV CARGO & LOGISTY PVT COMPANEY</strong><br><br></center>
                  <center> <strong class="text-primary">CUSTOMER</strong></div></center><br>
                  <center> <strong ><?php echo $_SESSION['user']; ?></strong></div></center>
                </div>
                </h1>
              
              </div>
            </div>
          </div>
        </section>

        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
               <p class="no-margin-bottom"><a target="_blank" href="http://www.uvcargo.cf/">2021 &copy; UV CARGO & LOGISTY PVT COMPANEY </a></p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>