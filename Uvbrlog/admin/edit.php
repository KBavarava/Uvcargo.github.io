<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Customer Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
     <!-- Favicon-->
     <link href="logo.png" rel="icon">
	
  </head>
<html>  
<?php

 $uname=''; 
 $email=''; 
 $contact=''; 
 $city=''; 
 
 $msg='';

if(isset($_GET['uid']) && $_GET['uid']!=''){
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'uvcargo');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD ,DB_DATABASE);
   $uid=$_GET['uid'];
   $res=mysqli_query($db,"select * from usersignup where uid='$uid'");
   $count=mysqli_num_rows($res);
   if($count>0){
         $row=mysqli_fetch_assoc($res);
	    $uname=$row['uname']; 
	    $email=$row['email'];  
	    $contact=$row['contact'];  
	    $city=$row['city']; 
	    
    
   }else{
      header('location:tables.php');
      die();
   }
}

if(isset($_POST['Submit']))
{
	$uname=$_POST['uname']; 
	$email=$_POST['email'];  
	$contact=$_POST['contact'];  
	$city=$_POST['city']; 
    

   $res=mysqli_query($db,"select * from usersignup where email='$email'");
   $count=mysqli_num_rows($res);
   if($count>0){
      if(isset($_GET['uid']) && $_GET['uid']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($uid==$getData['uid']){

         }else{
            $msg="Product Already Exist";
         }
      }else{
         $msg="Product Already Exist";
      }
   }

   if($msg==''){
        if(isset($_GET['uid']) && $_GET['uid']!=''){
          mysqli_query($db,"update usersignup set uname='$uname',email='$email',contact='$contact',city='$city' where uid='$uid'");
          }
		header('location:tables.php');
          die();
     }
}     
?>
<html>
<body>	
 <!--signup form start-->
 <form class="signup-form" action="" method="POST">
     <center><br><br>
		<h2>User Detail Edit Form</h2><br><br>
        <input  type="text" name="uname" placeholder="Username" value="<?php echo $uname ?>"><br><br>
        <input  type="email" name="email" placeholder="Email Address" value="<?php echo $email ?>"><br><br>
        <input  type="number" name="contact" placeholder="Contact Number" value="<?php echo $contact ?>"><br><br>
        <input  type="text" name="city" placeholder="City" value="<?php echo $city ?>"><br><br>
       
        <input class="btn" type="submit" name="Submit" value="Submit" > 
     </center>
 </form>
 </body>
 </html>

