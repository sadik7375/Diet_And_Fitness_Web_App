<?php

include "config.php";



function login($email,$password)

{	


	$conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
    $sql = "SELECT email role FROM registration WHERE email = '{$email}' AND password= '{$password}'";

     $result = mysqli_query($conn, $sql) or die("Query Failed.");

    if($result)
    {
		return true;
	}
	else
	{
		return false;
	}
}




?>