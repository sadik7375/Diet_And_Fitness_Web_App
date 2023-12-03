<?php



require_once ('../model/instructorModel.php');


if(isset($_POST['submit'])){
    
    $name =$_POST['name'];
    $email=$_POST['email'];
    $password =$_POST['password'];
    $expericence=$_POST['experience'];
    $expertise=$_POST['expertise'];
     
   
     if($name==" " || $password==" " || $email== " "  )
     {
        header("location:../view/register.php");
     }else{

        $status=registration($name,$email,$password,$expericence,$expertise);
        if($status)
        {
            
           header("Location: ../view/login.php");
           
           echo '<script> alert(Information submited succesfully) </script';
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
 
     
   }


   //show data in card for hiring (harun part)

   function getUsers() {
    return getAllUsers();
}

   




?>