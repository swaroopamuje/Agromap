<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'farmland');

if(isset($_POST['quantity']))
 {
    $crop_name=$_POST['cropname'];
    $quantity=$_POST['quantity'];
    $username=$_SESSION['username'];
    $cost=$_POST['cost'];
  if(!empty($crop_name))
    {
            $query="UPDATE crop SET quantity = '$quantity'+ quantity WHERE crop_name ='$crop_name'";
// "UPDATE crop  VALUE quantity = (quantity+ '$quantity')";
            $result=mysqli_query($con,$query);
            $query1="UPDATE crop SET cost = '$cost' WHERE crop_name ='$crop_name'";
            $result=mysqli_query($con,$query1);
    }
    else
    {
            $query2="INSERT INTO crop VALUES ('$username','$crop_name','$quantity','$cost')";
            $result=mysqli_query($con,$query2);
    }
 
  header('location:farmerhome.php');
  exit(0);
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add crops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/info.css">
</head>

<style>
   .button
   {
     background-color: black;
     color: white;
     border-radius: 8px;
     padding:8px;

   }

</style>

<body style="background: url('images/img0.jpg');
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;">
    <h3>Add Crops</h3>
    <div class="div1">
        <form action="#" method="POST">
            <div class="mb-3">
              <label class="form-label">Crop name:</label>
              <input type="text" class="form-control" name="cropname" required>
             
            </div>
            
            <div class="form-check">
                <label class="form-label">Quantity:</label>
                <input class="form-control" type="text" name="quantity" value='' required>
                 
            </div>
           <div class="form-label">
                <label class="form-label">Cost:</label> 
                <input class="form-control" type="text" name="cost" value='' required>
            </div>

            <button type="submit" class=" btn btn-dark">Submit</button>
          </form>
    </div>
      
</body>
</html>
 <!-- 
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
  -->