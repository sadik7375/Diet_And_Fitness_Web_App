<!--  
<?php
  
  $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

  session_start();
if(isset($_SESSION['email'])  )
{
 
  $email=$_SESSION['email'];
 
 

}
else{

  header("location:../view/login.php");
}










?>  -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin Panel</title>
</head>

<body class="font-sans bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Admin Panel </div>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-300">Home</a>
        
          <a href="addInstructor.php" class="hover:text-gray-300">Add instructor</a>
         
          <a href="logout.php"> logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto mt-8 ml-24 p-4">

    <!-- Page Heading -->
    <h2 class="text-2xl font-semibold mb-4">Dashboard </h2>
    <span class="text-lg font-semibold mb-4"><?php echo $email ?></span>
    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <!-- Card 1 -->
      <a href="#"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Client Charts Assign</h3>
        <p class="text-gray-600">Show all users. </p>
      </div></a>
     
      <a href="hiredInstructorInfo.php"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-semibold mb-2">Hired Instructor</h3>
        <p class="text-gray-600">Show all users. </p>
      </div></a>
      <!-- Card 2 -->
      <a href="showInstructor.php"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2"> Instructor Details</h3>
        <p class="text-gray-600">Check user's activity.</p>
      </div><a>

      <!-- Card 3 -->
     <a href="showComplain.php"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Complains</h3>
        <p class="text-gray-600">Any issue to solve.</p>
      </div></a>
      <a href="#"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Client Info</h3>
        <p class="text-gray-600">Any issue to solve.</p>
      </div></a>
      <a href="#"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Client payment</h3>
        <p class="text-gray-600">Any issue to solve.</p>
      </div></a>
    </div>
  </div>

  <!-- Footer -->
</div>
  <footer class="bg-[#FEB600] text-white text-center p-4 mt-64">
    <div className="max-w-screen-lg mx-auto">
        <div className="flex justify-between mt-3">
    <p>&copy; 2023 Admin Panel. All rights reserved.</p>
  </footer>
</div>

</body>

</html>


