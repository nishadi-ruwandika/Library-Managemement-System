<?php
  include"connection.php";
  include"navbar.php";

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
<!--
    <nav class="navbar navbar-inverse">
    	<div class="container-fluid">
            <div class="navbar-header">   	
	   	<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
	        </div>
	   	     	<ul class="nav navbar-nav">
	   	     		<li><a href="pproject.html">HOME</a></li>
	   	     		<li><a href="books">BOOKS</a></li>
	   	     		
	   	     		<li><a href="">FEEDBACK</a></li>
	   	     	</ul>
	   	     	<ul class="nav navbar-nav navbar-right">
	   	     	    <li><a href="student_login.html"> <span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
	   	     	    <li><a href="student_login.html"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>    
	   	     		<li><a href="registration.html"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
	   	     	</ul>
	    </div>
	</nav>
	-->		
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
	
	
</body>
</html>