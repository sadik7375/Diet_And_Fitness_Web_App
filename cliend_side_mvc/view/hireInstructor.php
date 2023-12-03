<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">

<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6">Hire Your Instructor</h1>
    <?php
    require_once '../controller/instructorController.php';
    $users = getUsers(); // Corrected the function call
    ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <?php
        while ($row = $users->fetch_assoc()) {
        ?>
            <!-- Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="https://placekitten.com/200/200" alt="User Image" class="rounded-full h-16 w-16 mx-auto mb-4">
                <h2 class="text-xl font-bold mb-2"><?php echo $row['name']; ?></h2>
                <p class="text-gray-600"><?php echo $row['expericence']; ?> of experience</p>
                <p class="text-gray-600"><?php echo 'Expertise: ' . $row['expertise']; ?></p>
                <button class="bg-yellow-500 hover:text-white text-black font-bold py-1 px-4 rounded">
                    Hire Me
                </button>
            </div>
        <?php
        }
        ?>
    </div>
</div>



</body>

</html>
