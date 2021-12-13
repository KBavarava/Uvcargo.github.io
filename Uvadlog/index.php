<?php
   include("db.php");
   session_start();

   if(isset($_POST['login']))
   {
    $name = $_POST['adnm'];
    
    $password = $_POST['psw']; 

    
    $sql = "SELECT * FROM adminlog WHERE name = '$name' and password = '$password' ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
    
       
       
       header("location:admin/index.php");
       $_SESSION['admin'] = $name;
      
    }else {
      echo "Your Login Name Email or Password is invalid";
    }
   }

?>
<html>
<head>
   <link href="logo.png" rel="icon">
   <link href="logo.png" rel="icon">
  
    <script src="./removeBanner.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Uv Cargo & Logisty Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="logo2.png" class="avatar">
        <h1>Admin Login </h1><br><br>
            <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="adnm"><br><br>
            <p>Password</p>
            <input type="password" name="psw"><br><br>
            <input type="submit" name="login" value="Login">
            
            </form>
        
        
        </div>
    
    </body>
</html>