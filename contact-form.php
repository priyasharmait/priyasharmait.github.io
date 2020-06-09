<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet"> 
	<link href="contact-us.css" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Birthday Planners</title>
</head>


<body>

<!-- Navigation Bar -->

<nav class="navbar navbar-expand-sm sticky-top navbar-light color1">
  <a class="navbar-brand"><img src="logo.png" style="height:80px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    

    <ul class="navbar-nav ml-auto ">
	      <li class="nav-item"><a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
	      <li class="nav-item"><a class="nav-link" href="themes.html">Themes</a></li>
	      <li class="nav-item dropdown">
	    	<a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
	        
		    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="services/balloon-decoration.html">Balloon Decoration</a>
		          <a class="dropdown-item" href="services/fun-activities.html">Fun Activities</a>
		          <a class="dropdown-item" href="services/snacks.html">Snacks</a>
		          <a class="dropdown-item" href="services/cakes.html">Cakes</a>
		          <a class="dropdown-item" href="services/media.html">Media</a>
		          
   		    </div>
	    </li>

	      <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
	      <li class="nav-item"><a class="nav-link active" href="contact-us.html">Contact Us</a></li>
	      
     
    </ul>
</div>
</nav>
<?php
if(isset ($_POST['submit']))
{
  $name =$_POST['name'];
$email =$_POST['Email'];
$phone =$_POST['Phone no'];
$date =$_POST['date'];
$message =$_POST['message'];

$to ="priyasharma2512ps@gmail.com";
$headers ="From:$name<$email>";
$message ="Name:$name \n\nEmail:$email \n\n Phone Number:$phone \n\n Message:$message";
if(mail($to,$message,$headers))
{
  echo "Email sent";
}

else{
  echo "Error please try again";
}

}


?>

<form action="contact-us.php" method="post" role="form">
	<h3>MAKE AN APPOINTMENT</h3>
  <fieldset class="account-info">
    <label>
      Name
      <input type="text" name="name" required>
    </label>
    <label>
      Email
      <input type="email" name="Email" required>
    </label>
    <label>
      Phone Number
      <input type="tel" name="Phone no" required>
    </label>
    <label>
      Date
      <br>
      <input type="date" name="date" required style="width:50%">
    </label>
    <label>
      Message
      <textarea name="message"></textarea>
    </label>
   
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Submit">
  </fieldset>
</form>


<!--footer-->

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <img src="logo.png" class="footer-logo">
      <h2>Birthday Bash</h2>
      <p class="pr-5 text-white-50">Your Birthday,Our Responsibility</p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square mr-1"></i></a><a href="#"><i class="fa fa-twitter-square mr-1"></i></a><a href="#"><i class="fa fa-envelope-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Themes</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>22, Mahanagar Gwalior</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>9184524132</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@birthdaybash.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>


    




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>