<?php
include "config.php";
include "../model/loginModel.php";

if(isset($_POST['login']))
{
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($email != null && $password != null)
  {
    $status = login ($email,$password);
    if($status)
    {       
    
         header('location: ../view/data.php');
    }
    else
    {
      header('location: ../../view/login.php');

    }

  }
  else
  {
    echo "null submission ....";
  }
}
else{
  echo "Enter username name and password 1st";
}


?>