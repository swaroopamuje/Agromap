<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login_register.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		table,td{
			border: solid black 1px;
			width: 50%;
			height: 50%;
		}
	</style>
	

</head>
<body>

<div class="maindiv">        
        <div class="heading"><h3>AgriMarket</h3></div>
        <div class="form-box" style="position: relative;">

            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="togglebutton" onclick="login()">Login</button>
                <button type="button" class="togglebutton" onclick="register()" >Register</button>
            </div>

            <form method="POST" action="login_check.php" class="input" id="login">
                <?php
					if(isset($_GET['error']))
					{
						echo "Invalid Username or Password";
					}
				?>
				<input type="text" class="myinput"  name="name" id="name"  placeholder="Username" required>
                <input type="password" class="myinput"  name="password" id="password" placeholder="Password" required>
                <div class="myradio">
	                <input type="radio" name="role" id="farmer" value="farmer">
					<label for="farmer">Farmer</label>
					<input type="radio" name="role" id="customer" value="customer" checked>
					<label for="customer">Customer</label>
				</div>
				<input type="submit" name="submit" value="Submit" class="submit-btn">
            </form>

             <!--  -->
<!-- <div class="maindiv"> 
        <div class="form-box" style="width:380px;
	    height: 700px;
	    position: relative;
	    margin: 4% auto;
	    background:#0002;
	    padding: 5px;
	    border: 2% solid black;
	    border-radius: 2%;
	    overflow: hidden;"> -->
	<form  action="con2.php" method="POST" id="register" class="input" style="top: 120px;position: absolute;width: 70%;transition: 0.5s;background: transparent; margin-left: 0px;">
			<div class="myradio">
	                <input type="radio" name="role" id="farmer" value="farmer">
					<label for="farmer">Farmer</label>
					<input type="radio" name="role" id="customer" value="customer" checked>
					<label for="customer">Customer</label>
			</div> 
			<!-- <div>
				
				<input type ="text" id="userid" name ="userid" class="myinput" placeholder="Enter your User id"  pattern="[a-z][0-9]{3}"><label style="padding-left:0px;color:blue; font-size: 15px;">Userid must be an alphabet followed by 3 digits</label>
			</div> -->
			<div>
				
				<input type ="text" id="name" name ="name" placeholder="Enter your Name" class="myinput">
			</div>
			<div>
				
				<input type ="password" id="password" name ="password" placeholder="Enter your Password" class="myinput">
			</div>
			<div>
				
				<input type ="password" id="confirmpassword" name ="password" placeholder="Confirm Password" class="myinput">
			</div>
			<div>
				
				<input type ="text" id="email" name ="email" placeholder="Enter your e-mail" class="myinput">
			</div>
			<div>
				
				<input type ="text" id="phno" name ="phno" placeholder="Enter your Phone number" class="myinput">
			</div>
			<p><button type="submit" value="submit" class="submit-btn">Submit</button></p>
		</form> 
<!-- 	</div>
</div> -->
 <!--  -->

        </div>
    </div>
<script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register()
        {
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";


        }
        function login()
        {
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";

        }
    </script>
</body>
</html>
<!-- 	<form action="login_check.php" method="post"> 
	
		
	   <input type="text" class="myinput"  name="name" id="name"  placeholder="User name" />
	   	<input type="text" class="myinput"  name="password" id="password" placeholder="Password" />
			<input type="radio" class="myinput"  name="role" id="farmer" value="farmer">
			<label for="farmer">Farmer</label>
			<input type="radio" class="myinput"  name="role" id="customer" value="customer" checked>
			<label for="customer">Customer</label>
			<input type="submit" name="submit" value="Submit" class="submit-btn">
		</form>
 -->

<!--
	<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>

    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Homepagebg.jpg" style="opacity: 0.9;" >
      <div class="carousel-caption d-none d-md-block" style="color:rgb(255, 255, 255);">
        <h4 style="font-style: italic;
        font-size: 45px;float:left;
        font-family: 'Times New Roman', Times, serif;
        margin-bottom: 15%;
        font-weight: bold;
        color:rgb(255,255,255)">Digital marketing will be beneficial to farmers to reach out and be visible to a broad range of audiences</h4>
      </div>
    </div>
 <footer style="background: #4BB543; padding-bottom:1%;color: rgb(255, 255, 255);font-weight: bold;font-size: 130%;">
  <p>&copy;2022 All rights reserved<br>
    contact : 7618798561<br>
    address : bmsit bengaluru
  </p>
</footer> 
-->
