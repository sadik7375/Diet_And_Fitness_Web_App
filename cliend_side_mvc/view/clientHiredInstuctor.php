

<?php
   $id = $_GET['id'];
  $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

  session_start();
if(isset($_SESSION['email'])  )
{
 
  $email=$_SESSION['email'];
 
 

}
else{

  header("location:../view/login.php");
}







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your instructor Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Your Instructor </div>
     
      </div>
    </div>
  </nav>
<div class="flex justify-between p-12 ">
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nabi</h5>
<p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
</a>
</div>





</body>
</html>