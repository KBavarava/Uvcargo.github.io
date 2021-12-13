<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
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
</html>
<?php

$branchcity='';
$branchname='';
$branchcontactnumber='';
$password='';
 $msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'uvcargo');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD ,DB_DATABASE);
   $id=$_GET['id'];
   $res=mysqli_query($db,"select * from  branchlog where id='$id'");
   $count=mysqli_num_rows($res);
   if($count>0){
         $row=mysqli_fetch_assoc($res);
	    $branchcity=$row['branchcity'];
         $branchname=$row['branchname'];
         $branchcontactnumber=$row['branchcontactnumber'];
         $password=$row['password'];
    
   }else{
      header('location:forms.php');
      die();
   }
}

if(isset($_POST['submit']))
{
     $row=mysqli_fetch_assoc($res);
     $branchcity=$_POST['branchcity'];
     $branchname=$_POST['branchname'];
     $branchcontactnumber=$_POST['branchcontactnumber'];
     $password=$_POST['password'];
    

   $res=mysqli_query($db,"select * from branchlog where branchname='$branchname'");
   $count=mysqli_num_rows($res);
   if($count>0){
      if(isset($_GET['id']) && $_GET['id']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($id==$getData['id']){

         }else{
            $msg="Product Already Exist";
         }
      }else{
         $msg="Product Already Exist";
      }
   }

   if($msg==''){
        if(isset($_GET['id']) && $_GET['id']!=''){
          mysqli_query($db,"update udetail set branchcity='$branchcity',branchname='$branchname'
          ,branchcontactnumber='$branchcontactnumber'
          ,password='$password' where id='$id'");
          }
		header('location:forms.php');
          die();
     }
}     
?>
<body>
     <html>
  <!-- Inline Form-->
               <div class="col-lg-11">                           
                <div class="block">
                  <div class="title"><strong>Update Branch Detail</strong></div>
                  <div class="block-body">
                    <form class="form-inline"  method="POST">
                    
                    <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Branch City</label>
                        <input id="inlineFormInput" type="text" placeholder="Branch City" name="branchcity" value="<?php echo $branchcity ?>" class="mr-sm-3 form-control">
                      </div>

                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Branch Name</label>
                        <input id="inlineFormInput" type="text" placeholder="Branch Name" name="branchname" value="<?php echo $branchname ?>" class="mr-sm-3 form-control">
                      </div>

                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Branch Contact Number</label>
                        <input id="inlineFormInput" type="int" placeholder="Branch Contact Number" name="branchcontactnumber" value="<?php echo $branchcontactnumber ?>"  class="mr-sm-3 form-control">
                      </div>
                      
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Password</label>
                        <input id="inlineFormInputGroup" type="text" placeholder="Password" name="password" value="<?php echo $password ?>" class="mr-sm-3 form-control">
                      </div>

                      <div class="form-group">
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
                     
           <!-- Inline Form End--> 

     </body>
</html>