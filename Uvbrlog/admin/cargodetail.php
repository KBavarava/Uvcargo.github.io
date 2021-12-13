<html>
<html>
  <head> 
   <script src="./removeBanner.js"></script>
    <meta charset="utf-8">
   
    <title>Uv Cargo & Logisty Branch Panel</title>
      
  
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  
  
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
  
  
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
   
    <!-- Favicon-->
    <link href="logo.png" rel="icon">
   
   
  
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
       
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Uv</strong><strong>Branch</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">U</strong><strong>A</strong></div></a>
                      
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
          
          <?php 
              session_start();    
          ?>

           <h1 class="h5"><?php echo "WELCOME ". $_SESSION['branch']; ?></h1>
          
          <!-- <p>Owner & Founder</p>-->
          
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
                <li><a href="index.php"> <i class="icon-home"></i>HOME </a></li>
                <li><a href="tables.php"> <i class="icon-grid"></i> User Details </a></li>
                <li class="active"><a href="cargodetail.php"> <i class="icon-grid"></i> Cargo Details </a></li>
               
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Cargo Details</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tables</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                 <!--<div class="title"><strong>User Details</strong></div>-->
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                              <th>User Id</th>
                              <th>Customer Name</th>
                              <th>Order Date</th>
                              <th>PickUp Date</th>
                              <th>Customer Email</th>
                              <th>Customer Number</th>
                              <th>PickUp Addresh</th>
                              <th>Pickup City</th>
                              <th>Delivery City</th>
                              <th>Delivery Addresh</th>
                              <th>Cargo Type</th>
                              <th>Payment Type</th>
                             
                      </thead>
                      <tbody>
                        <?php 
                          define('DB_SERVER', 'localhost');
                          define('DB_USERNAME', 'root');
                          define('DB_PASSWORD', '');
                          define('DB_DATABASE', 'uvcargo');
                          $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD ,DB_DATABASE);
        
                            $sql="SELECT * FROM  udetail";
        
                            $result = mysqli_query($db,$sql);
                           // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                              $i=1;
                              while($row=mysqli_fetch_assoc($result)){
                           ?>

                                <tr>
                                <td scope="row"><?php echo $row['uid']?></td>
                                <td><?php echo $row['cn']?></td>
                                <td><?php echo $row['od']?></td>  
                                <td><?php echo $row['pd']?></td>
                                <td><?php echo $row['ce']?></td>
                                <td><?php echo $row['cno']?></td>
                                <td><?php echo $row['pa']?></td>
                                <td><?php echo $row['pc']?></td>
                                <td><?php echo $row['dc']?></td>
                                <td><?php echo $row['da']?></td>
                                <td><?php echo $row['CargoType']?></td>
                                <td><?php echo $row['cod']?></td>

                                

                                </tr>
                                <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                
                </div>
              </div>
            
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
    <script src="js/front.js"></script>
    
  </body>
</html>