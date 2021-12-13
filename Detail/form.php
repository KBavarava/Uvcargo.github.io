<?php
 include('db.php');
session_start();    

?>
<!DOCTYPE html>
<html>
  <head> 
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
                <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                <li class="active"><a href="forms.html"> <i class="icon-padnote"></i>Order Form Detail</a></li>
               <!-- <li><a href="payment.php"> <i class="icon-padnote"></i>Bill</a></li>-->
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
           
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
           
       <section >
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="bar-chart block no-margin-bottom">
                
                    <!-- Inline Form-->
                    <form method="POST">

                      <div class=rightdiv><b>
                        <form action="" method="POST">
                        <table align="center" border="4" bordercolor=black>
                        <tr>
                            <td align="center"  colspan="4"><h4> Cargo Detail Form </h4></td>
                        </tr>
                        <tr>
                        <td><?php  echo "Customer Login Name "?></td> 
                        <td>&nbsp;<?php  echo " ". $_SESSION['user']; ?></td>
                        <!--<td>&nbsp; <input type='' name=''></td>-->
                        <td>Order Date</td>
                        <td>&nbsp;  &nbsp;<input type='date' name='od'required></td>
                        </tr>

                        <tr>
                          <td colspan=4><br></td> 
                        </tr>

                        <tr>
                          <td>Customer Name</td>
                          <td><input type='text' name='cn'required></td>
                          <td>PickUp Date</td>
                          <td>&nbsp;  &nbsp;<input type='date' name='pd' required></td>
                        </tr>
                        
                        <tr>
                          <td colspan=4><br></td> 
                        </tr>

                        <tr>
                          <td>Customer Email</td>
                          <td><input type='text' name='ce'required></td>
                          <td>Contact Number</td>
                          <td>&nbsp;  &nbsp;<input type='number' name='cno' required></td> 
                        </tr>
                      
                        <tr>
                          <td colspan=4><br></td> 
                        </tr>

                        <tr>
                        <td>PickUp Address</td>
                        <td><input type='text' name='pa' required></td>
                        <td>PickUp City</td>
                        <td><input type='text' name='pc' required></td>  
                        </tr>

                        <tr>
                          <td colspan=4><br></td> 
                        </tr>

                        <tr>
                        <td>Delivery City</td>
                        <td><input type='text' name='dc' required></td>
                        <td>Delivery Address</td>
                        <td><input type='text' name='da' required></td>
                        </tr>

                        <tr>
                          <td colspan=4><br></td> 
                        </tr>

                        <tr>
                          <td>Cargo Type</td>
                          <td>
                            <select id="Cargo" name="CargoType">
                              <option value="" >--Select Container--</option>
                              <option value="20ft Container" name="A">20ft Container</option>
                              <option value="40ft Container" name="A">40ft Container</option>
                              <option value="40ft High Cube Container" name="A">40ft High Cube Container</option>
                            </select>                       
                          </td>
                          <td>Payment Type</td>
                          <td>&nbsp; &nbsp;<input type="radio" id="Cod" name="cod" value="cod" required> <label for="cod">COD</label></td>    
                       </tr>

                        <tr>
                          <td align="center" colspan="4"><br> <button name="su" type="submit" class="btn btn-success">Submit </button></td>	
                        </tr>
                      
                      </table>	
                      </b>
                    </div>
                 </form>
                 </div>
              </div>
            </div>
          </div>
          <marquee direction="right"  scrollamount="16">
<img src=".\logotruck.png" width="46%" height="46%"> 
</marquee>
      </section>
   
   
<?php
 
  if(isset($_POST["su"]))
  {
    $a=$_POST['od']; //order date
    $b=$_POST['cn']; //customer name
    $c=$_POST['pd']; //pickup date
    $d=$_POST['ce']; // customer email
    $e=$_POST['cno']; //customer number
    $f=$_POST['pa']; // pickup addresh
    $g=$_POST['pc']; //pickup city
    $h=$_POST['dc']; //drop city
    $i=$_POST['da']; //drop addresh
    $ca=$_POST['CargoType']; //CargoType
    $j=$_POST['cod']; //cod


 
	 $sql="insert into udetail(od,cn,pd,ce,cno,pa,pc,dc,da,CargoType,cod)
         values ('$a','$b','$c','$d',$e,'$f','$g','$h','$i','$ca','$j')";

        if(mysqli_query($db,$sql))
          // echo "Your Crago Is Book";
          //echo
        {
          echo "Your Crago Is Book";           
        }

        else
         {
          echo "Not Book";
        }
        $sql;
 }
?>

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
    <script src="js/front.js"></script>
  </body>
</html>