<?php
                        include("db.php"); 
                         session_start();
                      
                         if(isset($_POST['log']))
                     {
                            $uname=$_POST['uname'];
                          
                            $psw=$_POST['psw']; 
                      
                          
                         $sql = "SELECT * FROM usersignup WHERE uname = '$uname' and psw = '$psw' ";
                        //  $sql = "SELECT * FROM adminlog WHERE name = '$name' and password = '$password' ";
                          $result = mysqli_query($db,$sql);
                          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        
                          
                          $count = mysqli_num_rows($result);
                          
                          // If result matched $myusername and $mypassword, table row must be 1 row
                            
                          if($count == 1) {
                         
                             header("location: ..\Detail\index.php");
                             $_SESSION['user'] = $uname;
                          }
                          
                          else 
                          
                          {
                           // echo "Your Login Name  or Password is invalid";  ?>
                            
                            <script>
                                function invalid() 
                                {
                                  alert("Your Login Name  or Password is invalid PLEASE ENTER VALIDE NAME OR PASSWORD");
                                }
                            </script>

                          <?php  
                          }    
                       }
                     ?>


<!DOCTYPE html>
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
  <body>

    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <span id="msg"></span>
      <form class="login-form" action="" method="POST">
        <i class="fas fa-user-circle"></i>
        <input class="user-input" type="text" name="uname" placeholder="Username" required>
        <input class="user-input" type="password" name="psw" placeholder="Password" required>
       
        <input class="btn" type="submit" name="log" value="LOGIN" onclick="invalid()">
        <div class="options-02">
          <p>Not Registered? <a href="#">Create an Account</a></p>
        </div>
      </form>
      <!--login form end-->
      
      
     <?php

    if(isset($_POST["signup"]))
    {
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $city=$_POST['city'];
        $psw=$_POST['psw'];
    
        $sql="insert into usersignup(uname,email,contact,city,psw)values ('$uname','$email','$contact','$city','$psw')";

        if(mysqli_query($db,$sql))
        {
           // echo "Go and log in"; ?>

         <script>
           
           function THANKYOU() 
            {
              alert("THANKYOU FOR SIGNUP");
            }
        </script>

      <?php            
        }
        else

          echo "record Not saved";

		$sql;
    }
    
    ?>
 
      
      <!--signup form start-->
      <form class="signup-form" action="" method="POST">
        <i class="fas fa-user-plus"></i>
        <input class="user-input" type="text" name="uname" placeholder="Username" required>
        <input class="user-input" type="email" name="email" placeholder="Email Address" required>
        <input class="user-input" type="number" name="contact" placeholder="Contact Number" required>
        <input class="user-input" type="text" name="city" placeholder="City" required>
        <input class="user-input" type="password" name="psw" placeholder="Password" required>
        <input class="btn" type="submit" name="signup" value="SIGN UP" onclick="THANKYOU()"> 
        <div class="options-02">
          <p>Already Registered? <a href="#">Sign In</a></p>
        </div>
      </form>
      <!--signup form end-->
    </div>
    
    
    <!--form area end-->

    <script type="text/javascript">
    $('.options-02 a').click(function(){
      $('form').animate({
        height: "toggle", opacity: "toggle"
      }, "slow");
    });
    </script>


  </body>
</html>
    