<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div  style="background: #4BB543; padding-bottom:1%;color: rgb(255, 255, 255);font-weight: bold;font-size: 100%;">
<?php

if(isset($_SESSION['username']))
	{

		echo "<center><h2>Hello ".$_SESSION['username']."</h2></center>";
	}
?>

    	
        <p class="nav-item">
        	
            <a class="nav-link custom1" href="logout.php" style="color: white;"><i class="fa fa-sign-out" style="font-size:22px">Logout</i></a>
        </p>  
    </div>
  </div>
</nav>
</div>

<!-- 
<div class="container">
        <div class="tablename">
             <h3 align=center style="margin-bottom:40px;
             margin-top:20px;
             text-transform:uppercase;">Crops Remaining</h3>
        </div>
        
      <table class="table table-striped table-bordered">
          <thead class="table-dark">
        <tr>
		  <th>Crop name</th>
          <th>Quantity</th>
          <th>Cost per KG</th>
          </tr>
          </thead>

         <?php
         $con=mysqli_connect('localhost','root','');
         mysqli_select_db($con,'farmland');
         $user_name=$_SESSION['username'];
         $query="SELECT crop_name, quantity, cost FROM crop WHERE username= '$user_name'";
         $result=$con->query($query);
         if($result->num_rows>0)
         {
           while($row=$result->fetch_assoc())
           {
             echo "<tr>
             <td>".$row["crop_name"]."</td>
             <td>".$row["quantity"]."</td>
             <td>".$row["cost"]."</td><tr>";
           }
           echo " ";
         }
         else{
           echo "<h2 align=center>No Crops to display</h2>";
         }
         $con->close();
         ?> 

      </table>
</div>
-------------------------------------- 
  <div class="div1">

  <div class="buttons">
    <h1>Add crops</h1><br>

    <h3>Crop Details</h3>
    <div class="div1">
        <form action="#" method="POST">
            <div class="mb-3">
              <label class="form-label">Crop name:</label>
              <input type="text" class="form-control" name="cropname" required>
             
            </div>
            
            <div class="form-check">
                <label class="form-check-label">Quantity:</label> 
                <input class="form-control" type="text" name="quantity" value=''required>
            </div>
           
            <button type="submit" class=" btn btn-dark">Submit</button>
          </form>
    </div>
    <?php
		$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'farmland');

		if(isset($_POST['quantity']))
		{
		  $crop_name=$_POST['cropname'];
		  $quantity=$_POST['quantity'];
		  $username=$_SESSION['username'];
		  $cost = 40;
		  if(!empty($crop_name))
		  {
		  	$query="UPDATE crop SET quantity = '$quantity'+ quantity WHERE crop_name ='$crop_name'";
// "UPDATE crop  VALUE quantity = (quantity+ '$quantity')";
		  	$result=mysqli_query($con,$query);
		  }
		  else
		  {
		  	$query="INSERT INTO crop (username,crop_name,quantity,cost) VALUES ('$username','$crop_name','$quantity','$cost')";
		  	$result=mysqli_query($con,$query);
		  }
		  // header('location:farmerhome.php');
		  // exit(0);
		  }
  	?>
 -----------------------------------------------------------------
<br>
<br>
<div class="div1" >
    <h1> ORDERS</h1>
    <div class="tablename">
         <h3 style="color:black;
         text-transform:uppercase;
         text-decoration:none;">Your orders</h3>
    </div>
    <div class="noresults"></div>
  <table style="background:#0006;"class="table table-striped table-bordered">
    <tr style="color:white;" >
     <thead class="table-dark">
      <th>Crop name</th>
      <th>Customer name</th>
      <th>Total Cost</th>
      <th>Quantity</th>
      <th>Ordered received date and time</th>
      </tr>
      </thead>

     <?php
     $con=mysqli_connect('localhost','root','');
     mysqli_select_db($con,'farmland');
     $user_name=$_SESSION['username'];
     $query="SELECT username,crop_name,customer_name,total_cost,quantity,dateandtime FROM orders WHERE username='$user_name'";
     $result=$con->query($query);
     if($result->num_rows>0)
     {
       while($row=$result->fetch_assoc())
       {
         echo "<tr><td>".$row["crop_name"]."</td>
         <td >".$row["customer_name"]."</td>
         <td >".$row["total_cost"]."</td>
         <td >".$row["quantity"]."</td>
         <td >".$row["dateandtime"]."</td><tr>";
       }
       echo "</table>";
     }
     else{
       echo "<h2 align=center>No Orders to show<h2>";
     }
     $con->close();

     ?> 
  </table>
</div>
--------------------------------------------------- 
    <br>
     <button class="button" onclick="window.location.href = 'farmercropview.php'">Crops remaining</button> <br>
    <button class="button" onclick="window.location.href = 'farmercroporders.php'">Orders</button> 
  </div>
  </div> 


</body>
-->
<footer style="background: #4BB543; padding-bottom:1%;color: rgb(255, 255, 255);font-weight: bold;font-size: 100%;">
  <p>&copy;2023<br>
    contact : 9999999999<br>
    address : BMSIT Bengaluru
  </p>
</footer>

</html>