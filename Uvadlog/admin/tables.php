
<!DOCTYPE html>
<html>
  <head> 
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uv Cargo & Logisty Admin Panel</title>
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
                       <form id="searchForm" action="#">
              <div class="form-group">
                
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Uv</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">U</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
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
          
          <h1 class="h5"><?php echo $_SESSION['admin']. " PATEL"; ?></h1>
          
          <p>Owner & Founder</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus <span class="heading">Main</span>-->
        <ul class="list-unstyled">
                <li><a href="index.php"> <i class="icon-home"></i>HOME </a></li>
                <li class="active"><a href="tables.php"> <i class="icon-grid"></i> User Details </a></li>
                <li><a href="cargodetail.php"> <i class="icon-grid"></i> Cargo Details </a></li>
                
                <li><a href="forms.php"> <i class="icon-padnote"></i>Branch Details </a></li>
               <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>-->
        </ul>
            
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">User Details</h2>
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
                           <th>User Id  </th>
                           <th>User Name</th>
                           <th>Email    </th>
                           <th>Contact  </th>
                           <th>City     </th>
                           <th>Password </th>
                           <th>Delete   </th>
                      </thead>
                      <tbody>
                        <?php 
                          include('db.php');

                          if(isset($_GET['type']) && $_GET['type']!='')
                         {
                            $type=($_GET['type']);
                            if($type=='delete')
                            {
                               $uid=($_GET['uid']);
                               $delete_sql="delete from usersignup where uid='$uid'";
                               mysqli_query($db,$delete_sql);
                            }
                         }
                         
        
                            $sql="SELECT * FROM usersignup";
        
                            $result = mysqli_query($db,$sql);
                           // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                              $i=1;
                              while($row=mysqli_fetch_assoc($result)){
                           ?>

                                <tr>
                                <td scope="row"><?php echo $row['uid']?></td>
                                <td><?php echo $row['uname']?></td>
                                <td><?php echo $row['email']?></td>  
                                <td><?php echo $row['contact']?></td>
                                <td><?php echo $row['city']?></td>
                                <td><?php echo $row['psw']?></td>

                               
                                <td>
                                    <a href="?type=delete&uid=<?php echo $row["uid"]; ?>" class="btn btn-danger">Delete</a>
                                </td>
                               
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