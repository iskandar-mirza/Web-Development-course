<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Layout - PHP</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col">

  <header class="w-full">
    <?php include 'header.php'; ?>
  </header>

  <div class="flex flex-1">
    
    <aside class="w-1/4 bg-gray-800 text-white p-4">
      <h2 class="text-xl font-bold mb-4">Sidebar</h2>
      <ul class="space-y-2">
        <li>
          <a href="#" class="block bg-gray-700 p-2 rounded font-semibold">Home</a>
        </li>
        <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Projects</a></li>
        <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Users</a></li>
        <li><a href="#" class="block hover:bg-gray-700 p-2 rounded">Settings</a></li>
      </ul>
    </aside>

    <main class="w-3/4 p-6">
      <h1 class="text-3xl font-bold mb-4">Home</h1>

      <?php
        $role = "admin";
        if ($role === "admin") {
          echo "<h2 class='text-xl font-semibold text-green-600 mb-4'>Welcome, Admin!</h2>";
        } else {
          echo "<h2 class='text-xl font-semibold text-blue-600 mb-4'>Welcome, User!</h2>";
        }
      ?>

      <p class="text-gray-700 mb-6">
        Welcome to SaaS Dashboard Layout. This is the main content area. The sidebar is on the left, and this section expands 
        to fill the rest of the screen. More text, images, or components can be added here.
      </p>

      <h3 class="text-lg font-bold mb-2">User List</h3>
      <ul class="list-disc pl-6 text-gray-800">
        <?php
          $users = ["Alice", "Bob", "Charlie", "David"];
          foreach ($users as $user) {
            echo "<li>$user</li>";
          }
        ?>
      </ul>
    </main>
  </div>

</body>
</html>
