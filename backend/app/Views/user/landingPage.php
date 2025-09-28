<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Achlys Bookstore</title>
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
    .btn-main {
      @apply inline-block bg-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-300 transition;
    }
  </style>
</head>
<body class="text-gray-100">
  <div class="overlay min-h-screen flex flex-col">

    <!-- Header -->
    <header class="custom-neutral shadow text-gray-100 sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="header-title text-3xl md:text-4xl tracking-wider">Achlys Bookstore</h1>
        <nav class="flex space-x-6">
          <a href="#features" class="btn-main text-base">Products</a>
          <a href="#about" class="btn-main text-base">Services</a>
          <a href="#contact" class="btn-main text-base">About</a>
        </nav>
      </div>
    </header>

    <!-- Hero -->
    <main class="flex-grow">
      <section class="py-32 flex items-center justify-center text-center">
        <div class="max-w-4xl">
          <h2 class="text-6xl md:text-7xl font-bold mb-8 text-gray-50">
            Welcome to Achlys Bookstore
          </h2>
          <p class="text-2xl md:text-3xl mb-12 text-gray-200">
            Your cozy corner for buying books and exploring new worlds.
          </p>
          <a href="#features" class="btn-main text-xl md:text-2xl px-10 py-5 rounded-full bg-white bg-opacity-80 text-gray-800 shadow-lg hover:bg-opacity-100 transition">
            Start Reading
          </a>
        </div>
      </section>

      <!-- Featured Products -->
      <section id="features" class="py-20 bg-white bg-opacity-80 text-gray-900">
        <div class="max-w-6xl mx-auto px-4">
          <h3 class="text-4xl font-bold text-center mb-12">Featured Books</h3>
          <div class="grid gap-8 md:grid-cols-3">
            <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
              <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-8a8430b5--Books5.jpg?v=1620061376" alt="Book: “The Midnight Library” by Matt Haig" class="rounded mb-4 mx-auto">
              <h4 class="text-2xl font-semibold mb-2">The Lord of the Rings</h4>
              <p class="text-gray-700">by J.R.R. Tolkien — A fantasy epic by J.R.R. Tolkien about Frodo Baggins’ quest to destroy a dark lord’s powerful ring and save Middle-earth.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
              <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-b57dac15--Books8_1200x.jpg?v=1620061403" alt="Book: “Klara and the Sun” by Kazuo Ishiguro" class="rounded mb-4 mx-auto">
              <h4 class="text-2xl font-semibold mb-2">Harry Potter and the Sorcerer's Stone</h4>
              <p class="text-gray-700">by J.K Rowling — A story that follows young wizard Harry as he discovers his magical heritage, attends Hogwarts School, and faces dark forces to stop Voldemort from returning.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
              <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-71b40b91--Books_1200x.jpg?v=1620061288" alt="Book: “Project Hail Mary” by Andy Weir" class="rounded mb-4 mx-auto">
              <h4 class="text-2xl font-semibold mb-2">The Origin of Species</h4>
              <p class="text-gray-700">by Charles Darwin — Explains how species evolve over time through natural selection, laying the foundation for modern evolutionary biology.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- About / Services -->
      <section id="about" class="py-20 bg-white bg-opacity-90 text-gray-900">
        <div class="max-w-5xl mx-auto px-4 text-center">
          <h3 class="text-4xl font-bold mb-8">Our Services</h3>
          <p class="text-lg mb-6">
            Achlys Bookstore features everything from rare collectibles to the newest releases, offering personalized reading recommendations, welcoming book clubs for lively discussions, and cozy corners where visitors can relax and immerse themselves in their favorite stories.
          </p>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact" class="py-10 bg-white bg-opacity-80 text-gray-900">
        <div class="max-w-2xl mx-auto px-4 text-center">
          <h3 class="text-2xl font-bold mb-4">Get in Touch</h3>
          <p>Email: <a href="mailto:info@achlysbookstore.com" class="underline">info@achlysbookstore.com</a></p>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="custom-neutral text-gray-100 text-center py-6">
      &copy; <script>document.write(new Date().getFullYear())</script> Achlys Bookstore. All rights reserved.
    </footer>

  </div>
</body>
</html>
