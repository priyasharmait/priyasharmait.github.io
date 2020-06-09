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
    <title>Thankyou</title>
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
<body>
<div class=" container bg-info shadow inline text-white margin-auto w-50 mt-5">
Thankyou for contacting us, <?php echo $_POST["name"]; ?>
<br>
We will reach you soon. Have a good day!!!!
</div>


<script src="js/jquery.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("index.html"); //will redirect to main page (index.html)
        }, 6000); //will call the function after 6 secs.

    </script> 

    <button class="button" href="index.html">Click this</button> if you aren't redirected to home page within 6 seconds.

</body>
</html>