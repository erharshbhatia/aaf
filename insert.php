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

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['tnum'];

	$sql = "INSERT INTO donations (fname,lname,email,number) VALUES ('$fname','$lname','$email','$number')";

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