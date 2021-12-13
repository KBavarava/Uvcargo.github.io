<?php

 $od=''; //order date
 $cn=''; //customer name
 $td=''; //pickup date
 $ce=''; // customer email
 $cno=''; //customer number
 $pa=''; // pickup addresh
 $pc=''; //pickup city
 $dc=''; //drop city
 $da=''; //drop addresh
 $CargoType=''; //CargoType
 $cod=''; //cod
 $msg='';

if(isset($_GET['uid']) && $_GET['uid']!=''){
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'uvcargo');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD ,DB_DATABASE);
   $uid=$_GET['uid'];
   $res=mysqli_query($db,"select * from udetail where uid='$uid'");
   $count=mysqli_num_rows($res);
   if($count>0){
         $row=mysqli_fetch_assoc($res);
	    $od=$row['od']; //order date
	    $cn=$row['cn']; //customer name
	    $pd=$row['pd']; //pickup date 
	    $ce=$row['ce']; // customer email
	    $cno=$row['cno']; //customer number
	    $pa=$row['pa']; // pickup addresh
	    $pc=$row['pc']; //pickup city
	    $dc=$row['dc']; //drop city
	    $da=$row['da']; //drop addresh
	    $CargoType=$row['CargoType']; //CargoType
	    $cod=$row['cod']; //cod
    
   }else{
      header('location:cargodetail.php');
      die();
   }
}

if(isset($_POST['su']))
{
     $od=$_POST['od']; //order date
     $cn=$_POST['cn']; //customer name
     $pd=$_POST['pd']; //pickup date 
     $ce=$_POST['ce']; // customer email
     $cno=$_POST['cno']; //customer number
     $pa=$_POST['pa']; // pickup addresh
     $pc=$_POST['pc']; //pickup city
     $dc=$_POST['dc']; //drop city
     $da=$_POST['da']; //drop addresh
     $CargoType=$_POST['CargoType']; //CargoType
     $cod=$_POST['cod']; //cod

   $res=mysqli_query($db,"select * from udetail where cn='$cn'");
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
          mysqli_query($db,"update udetail set od='$od',cn='$cn',pd='$pd',ce='$ce',cno='$cno',pa='$pa'
          ,pc='$pc',dc='$dc',da='$da',CargoType='$CargoType',cod='$cod' where uid='$uid'");
          }
		header('location:cargodetail.php');
          die();
     }
}     
?>
<html>
 <form method="POST">
	<title>Cargo Detail Form</title>
<body>
<center>
		 <?php 
              session_start();    
          ?>

	

		<div class=rightdiv><b>
	 	   <form action="" method="POST">
	 	   <table align="center" border="4" bordercolor=black>
			
			<tr>
			<td align="center"  colspan="4"><h4> Cargo Detail Form </h4></td>
		   </tr>

			<tr>
			
			<td>Customer Name</td>
			<td><input type='text' name='cn' value="<?php echo $cn ?>"></td>
			<td>Order Date</td>
			<td>&nbsp;  &nbsp;<input type='date' name='od' value="<?php echo $od ?>"></td>
			
			</tr>

			<tr>
				<td colspan=4><br></td> 
			</tr>

			<tr>
				
				<td>PickUp Date</td>
				<td>&nbsp;  &nbsp;<input type='date' name='pd' value="<?php echo $pd ?>"></td>
				<td>Contact Number</td>
				<td>&nbsp;  &nbsp;<input type='number' name='cno' value="<?php echo $cno ?>"></td>
				
			</tr>
			

			<tr>
				<td colspan=4><br></td> 
			</tr>

			<tr>
				<td>Customer Email</td>
				<td><input type='text' name='ce' value="<?php echo $ce ?>"></td>
				<td>PickUp City</td>
			     <td><input type='text' name='pc' value="<?php echo $pc ?>"></td>
				
			</tr>
			

			<tr>
				<td colspan=4><br></td> 
			</tr>

			<tr>
			<td>PickUp Address</td>
			<td><input type='text' name='pa' value="<?php echo $pa ?>"></td>
			<td>Delivery City</td>
			<td><input type='text' name='dc' value="<?php echo $dc ?>"></td>
			
			</tr>
			

			<tr>
				<td colspan=4><br></td> 
			</tr>
	
			<tr>
			<td>Delivery Address</td>
			<td><input type='text' name='da' value="<?php echo $da ?>"></td>
			<td>Cargo Type</td>
		<td>
		<select id="Cargo" name="CargoType">
                      <option>Select Cargo</option>
                      <?php
                      $res=mysqli_query($db,"select * from udetail"); 
                      while($row=mysqli_fetch_assoc($res)){
                        if($row['uid']==$CargoType){
                          echo "<option selected value=".$row['uid'].">".$row['CargoType']."</option>";
                        }else{
                          echo "<option value=".$row['uid'].">".$row['CargoType']."</option>";
                      }
                    }
                   ?>
			</select>
		</td>
		<tr>
				<td colspan=4><br></td> 
			</tr>
			
			</tr>
			<td>Payment Type</td>
               <td>&nbsp; &nbsp;<input type="radio" id="Cod" name="cod" value="cod" value="<?php echo $cod ?>"> <label for="cod">COD</label></td> 
			<tr>
			<td align="center" colspan="4"><br> <button onclick="submit()" type="Submit" name="su" >Submit </button></td>
			
		   </tr>
		</table>	
	</form>
</body>
</html>