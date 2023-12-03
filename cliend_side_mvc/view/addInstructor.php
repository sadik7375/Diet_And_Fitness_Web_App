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
        <div class="text-xl font-semibold">Admin Panel</div>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-300">Home</a>
          <a href="#" class="hover:text-gray-300">Dashboard</a>
          <a href="#" class="hover:text-gray-300">Settings</a>
          <a href="#" class="hover:text-gray-300">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content with Sidebar -->
  <div class="container mx-auto mt-8 p-4 flex">

    <!-- Sidebar -->
    <!-- <div class="w-1/5 bg-[#FEB600] p-4 rounded-lg shadow-md">
   
      <a href="#" class="block text-white hover:text-gray-300 mb-2">Sidebar Item 1</a>
      <a href="#" class="block text-white hover:text-gray-300 mb-2">Sidebar Item 2</a>
      <a href="#" class="block text-white hover:text-gray-300 mb-2">Sidebar Item 3</a>
    </div> -->

    <!-- Main Content -->
    <div class="w-4/5 p-4">

      <!-- Page Heading -->
      <h2 class="text-2xl font-semibold   ml-32">Add Instructor</h2>

      <!-- Form for Instructor Information -->
      <div class="bg-gray-300  ml-32 p-12 shadow-xl">
      <form  method="POST" action="../controller/instructorController.php" class="max-w-md mx-auto border-spacing-2">

        <div class="mb-4">
         
          <input type="text" placeholder="Name" id="name" name="name" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
         
          <input type="text" placeholder="Email" id="name" name="email" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
      
          <input type="text" placeholder="Password" id="name" name="password" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
        
          <input type="text" placeholder="Expericence" id="name" name="experience" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
        
        <input type="text" placeholder="Expertise" id="name" name="expertise" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
        
        <input type="text" placeholder="Monthly Fee" id="name" name="fee" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
        
        <button name="submit" class="bg-[#FEB600] pl-3 pr-3 pb-2 pt-2">Add instructor</button>
      </div>


      


</form>
