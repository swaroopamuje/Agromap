<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer crop orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="background: url('images/img1.jpg');
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;padding-top: 10%;">
<div class="container">
<div class="tablename">
    <h3 style="color:black;text-align:center;padding:2%;text-transform:uppercase;">placed orders</h3>
</div>
<div class="noresults">
</div>
<table class="table table-bordered table-striped">
  <thead class="table-dark">
<tr>

 <th>Farmer</th>
 <th>Crop name</th>
 <th>Total Cost</th>
 <th>Quantity</th>
 <th>Ordered date and time</th>
 </tr>
 </thead>

<?php
$con=mysqli_connect('localhost','root','');
if($con->connect_error)
{
  die("Connection error");
}
mysqli_select_db($con,'farmland');
session_start();
$customername=$_SESSION['username'];
$query="SELECT username,crop_name,total_cost,quantity,dateandtime from orders where customer_name='$customername'";
$result=$con->query($query);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    
    echo "<tr><td>".$row["username"]."</td>
    <td>".$row["crop_name"]."</td>
    <td>&#8377;".$row["total_cost"]."</td>
    <td>".$row["quantity"]."</td>
    <td>".$row["dateandtime"]."</td><tr>"; 
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
</body>
</html>