<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer crop views</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var req_quantity=document.getElementById("quantity");
    function validate()
    {
      if(req_quantity.value==0)
      {
        alert("value cannot be zero");
        return false;
      }
      else
      return true;
    }
    </script>

  </head>
<body style="background: url('images/img1.jpg');
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;padding-top: 10%;">
    <div class="container">
        <div class="tablename">
             <h3 align=center>CROPS AVAILABLE</h3>
        </div>
        
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
          
          <th>Crop name</th>
          
          <th>Quantity available</th>
          <th>Cost</th>
          <th>quantity required</th>
          <th>Click here to order</th>
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
         $user_id=$_SESSION['username'];
          

         $query="SELECT  crop_name, SUM(quantity) quantity , cost FROM crop GROUP BY crop_name;";
         $result=$con->query($query);
         // $crop=$_SESSION['crop_name'];
         if($result->num_rows>0)
         {
           while($row=$result->fetch_assoc())
           {
             // $qunt="SELECT  crop_name, SUM(quantity) quantity FROM crop GROUP BY crop_name";
             //  $resq=$con->query($qunt);
             $quantity_available=$row['quantity'];
             echo "<tr>
             <td>".$row["crop_name"]."</td>
             
             <td>".$row["quantity"]."</td>
             <td>".$row["cost"]."</td>
             <td><form name='form1' action='addorders.php' method='post'><input type='number' min=0 name='quantity_required' id='quantity' placeholder='Enter quantity' required></td>
             <td><button type='submit' name='order' value=".'crop_name'." style='color: white;background:green;font-size:15px;width: 80px;height:25px;border-radius: 6px;margin-left: 30px;'>order</button></form></td><tr>";
             
           }
           echo "</table>";
         }
         else{
           echo "<h2 align=center>No Crops to display</h2>";
         }
         $con->close();
         ?> 
         
      </table>
        </div>
        <script>
          var reqquantity=document.forms['form']['quantity_required'];
          function checkquantity()
          {
          if(reqquantity.value==0)
          {
            alert("quantity cannot be 0");
            return false;
          }
          return true;
          }
        </script>
</body>
</html>