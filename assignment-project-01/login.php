<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div class="w-full max-w-sm bg-white shadow-lg rounded-2xl p-6">
        <h1 class="text-2xl font-bold text-center mb-6">Log In</h1>
        <p class="pb-4">Please fill in this form to Log In your account:</p>
        <form action="backend.php" method="POST" class="space-y-4">
          <input type="hidden" name="action" value="login">

          <div>
            <input
              type="email"
              name="email"
              placeholder="Enter your Email"
              required
              class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <input
              type="password"
              name="password"
              placeholder="Enter your Password"
              required
              class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <button class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg shadow-md hover:bg-blue-700">Submit</button>
          </div>
        </form>
        <div class="flex gap-4 pt-4">
          <p>Not registered!</p>
          <a class="linktext-blue-600 visited:text-purple-600 ..." href='register.php'>Register here</a>
        </div>
      </div>
    </div>
  </body>
</html>
