<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farmer crop views</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="background: url('images/img0.jpg');
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;">
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
             <td>".$row["quantity"]."Kg</td>
             <td> ₹ ".$row["cost"]."</td><tr>";
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
</body>
</html>