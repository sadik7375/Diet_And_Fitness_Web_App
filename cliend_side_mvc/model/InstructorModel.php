<?php


//instructor registor
function registration($name,$email,$password,$expericence,$expertise)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 =  "INSERT INTO instructor (name,email,password,expericence,expertise)
                  VALUES ('{$name}','{$email}','{$password}','{$expericence}','{$expertise}')";
        //   echo "<pre>";
        //   print_r($sql1);
        //   exit;
    
        $result = mysqli_query($conn,$sql1);
        // // $user= mysqli_fetch_assoc($result);
        // // echo $user;
        // // echo $result;

      



        if($result)
        {
            return true;
        }
        else
        {
             return false;
            // echo "Error: " . mysqli_error($conn);
        }
    
    }

//show data instructor card for hire 




function getAllUsers()
{

    $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql="SELECT id,name,email,expericence,expertise FROM instructor";
    $result=$conn->query($sql);

    $conn->close();

    return $result;
    





}







?>