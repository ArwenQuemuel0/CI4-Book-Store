<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Achlys Bookstore – Sign Up</title>
  <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto+Slab:wght@100..900&family=Titan+One&display=swap" rel="stylesheet">
  <style>
    body {
      background: url('https://cdn.pixabay.com/photo/2017/10/15/08/56/neutral-2852878_1280.jpg')
                  no-repeat center center fixed;
      background-size: cover;
      font-family: 'Roboto Slab', serif;
    }
    .overlay { background-color: rgba(255, 255, 255, 0.55); }
    .custom-neutral { background-color: #8B7E74; }
    .header-title { font-family: 'Titan One', cursive; }
  </style>
</head>
<body class="text-gray-100">
  <div class="overlay min-h-screen flex flex-col">

    <!-- Header -->
    <header class="custom-neutral shadow text-gray-100 sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="header-title text-3xl md:text-4xl tracking-wider">Achlys Bookstore</h1>
      </div>
    </header>

    <!-- Sign Up Form -->
    <main class="flex-grow flex items-center justify-center px-4">
      <div class="bg-white bg-opacity-80 rounded-xl shadow-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-900">Create an Account</h2>
        <form action="#" method="post" class="space-y-6">
          <div>
            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
            <input type="text" id="name" name="name" required
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#8B7E74]" />
          </div>
          <div>
            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
            <input type="email" id="email" name="email" required
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#8B7E74]" />
          </div>
          <div>
            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" required
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#8B7E74]" />
          </div>
          <div>
            <label for="confirm" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
            <input type="password" id="confirm" name="confirm" required
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#8B7E74]" />
          </div>
          <button type="submit"
            class="w-full inline-block text-lg font-semibold px-6 py-3 rounded-full bg-gray-200 text-gray-800 shadow hover:bg-gray-300 transition duration-200">
            Sign Up
          </button>
        </form>
        <p class="text-center text-gray-700 mt-6">
          Already have an account?
          <a href="/loginPage" class="underline text-gray-800 hover:text-gray-900">Log in</a>
        </p>
      </div>
    </main>

    <!-- Footer -->
    <footer class="custom-neutral text-gray-100 text-center py-6">
      &copy; <script>document.write(new Date().getFullYear())</script> Achlys Bookstore. All rights reserved.
    </footer>

  </div>
</body>
</html>
