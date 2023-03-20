<?php
  include "connection.php";
  include "navbar.php";

  ?>

<!DOCTYPE html>
<html>
<head>

	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	 <style type="text/css">
      	section
      	{
      		margin-top: -20px;
      	}
      </style>
</head>
<body>

	<section>
	   <div class="reg_img">
	   	
	   	<div class="box2">
	   	    <h1 style="text-align: center; font-size:35px;font-family: Lucida Console;">Library Management System</h1><br>	
            <h1 style="text-align: center;font-size:25px;">User Login Form</h1><br>
            <form name="registration" action="" method="post"> 
            	
            	<div class="login">
            	<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
            	<input class="form-control" type="text" name="lirst" placeholder="Last Name" required=""><br>
            	<input class="form-control" type="text" name="username" placeholder="username" required=""><br>
            	<input class="form-control" type="password" name="password" placeholder="password" required=""><br>
            	<input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
            	<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
            	<input class="form-control" type="text" name="contact" placeholder="Contact No" required=""><br>
            	<input class="btn btn-defalt"type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height:30px;"></div>
            </form>      
	   	</div>   	
	   </div>	
	</section>
	<?php
	if(isset($_POST['submit']))
	{   mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[roll]','$_POST[email]','$_POST[contact]');");
    ?>
         <script type="text/javascript">
         	alert("Registration successfully"); /*registration page...*/
         </script>
    <?php
    /*
}
    else
    {
    	?>
    	<script type="text/javascript">
         	alert("The username already exist");
         </script>
         <?php
    }*/
	}

	?>
	
	
</body>
</html>