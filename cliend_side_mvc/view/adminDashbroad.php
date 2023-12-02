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
          <a href="#" class="hover:text-gray-300">Profile</a>
          <a href="#" class="hover:text-gray-300">Add instructor</a>
          <a href="#" class="hover:text-gray-300"></a>
          <a href="#" class="hover:text-gray-300">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto mt-8 ml-24 p-4">

    <!-- Page Heading -->
    <h2 class="text-2xl font-semibold mb-4">Dashboard</h2>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <!-- Card 1 -->
      <a href="#"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Users</h3>
        <p class="text-gray-600">Show all users. </p>
      </div></a>
     
      <a href="#"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-semibold mb-2">All instructors</h3>
        <p class="text-gray-600">Show all users. </p>
      </div></a>
      <!-- Card 2 -->
      <a href="#"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Pogress</h3>
        <p class="text-gray-600">Check user's activity.</p>
      </div><a>

      <!-- Card 3 -->
     <a href="#"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Complains</h3>
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


