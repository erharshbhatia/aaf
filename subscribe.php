<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="aafoundationindia_logoresize.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="rellax.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
  <nav id="navbar">
    <div><img class="img-fluid logo" src="aafoundationindia_logo.png"></div>
    <ul class="nav-links">
      <li>
        <div><a href="#" class="blocks">The Foundation</a></div>
      </li>

      <li>
        <div class="donate-us"><a href="aa_form.html" class="blocks"><i id="heart" class="fa fa-heart"></i>Donations</a>
        </div>
      </li>
      <li>
        <div><a href="#" class="blocks">About Us</a></div>
      </li>
      <li>
        <div><a href="#" class="blocks">Our Work</a></div>
      </li>
    </ul>
    <ion-icon name="menu" onclick="openNav()" class="sidenav_icon"></ion-icon>
  </nav>
  <!--sidenav start-->
  <div id="mySidenav" class="sidenav">
    <div class="mainnav" style="">
      <div class="row div-upper" style="width: 100%; align-content: end; padding-left: 100px;padding-right: 80px;">
        <div class="col-6" style=""><img class=" logo " id="sidenav_img" src="aafoundationindia_logo.png"></div>
        <div class="col-6" style="margin-right: -200px;">
          <ion-icon name="close" onclick="closeNav()" class="sidenav_close"></ion-icon>
        </div>
      </div>
      <div class="horizontal-line-box">
        <ul id="list-sidenav" style="padding: 0px; line-height:;">
          <li class="sidenav-li"><a href="#">The Foundation</a></li>
          <li class="sidenav-li"><a href="#">About Us</a></li>
          <li class="sidenav-li"><a href="#">Get Involved</a></li>
          <li class="sidenav-li"><a href="#">Our Work</a></li>
        </ul>
      </div>
      <div class="fbtn donate-sidenav-div">
        <button type="button" style="
            margin-top: 50px;
            position: absolute; 
            left: 50%; 
            top: 50%;  
            transform: translate(-50%,-50%); " class="btn btn-primary b2"><b>Donate</b></button></div>
    </div>
  </div>
  </div>

  <!--sidenav end-->


<?php

	$con = mysqli_connect('localhost','id8966663_test_db','testdb@99');

	if(!$con)
	{
		echo 'connection error';
	}

	if(!mysqli_select_db($con,'id8966663_test_database'))
	{
		echo 'No database selected';
	}

	$email = $_POST['email'];
	
	$sql = "INSERT INTO subscribe (email) VALUES ('$email')";

	if(!mysqli_query($con,$sql))
	{
		echo 'error';
	}
	else
	{
		echo 'You will receive email';
	}

	header("refresh:2; url=index.html");
	

?>

</body>
</html>