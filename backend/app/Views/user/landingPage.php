<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Achlys Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
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
        .overlay {
            background-color: rgba(255, 255, 255, 0.55);
        }
        .custom-neutral {
            background-color: #8B7E74;
        }
        .header-title {
            font-family: 'Titan One', cursive;
        }
        .btn-main {
            @apply inline-block bg-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-300 transition;
        }
    </style>
</head>
<body class="text-gray-100">
<div class="overlay min-h-screen flex flex-col">
    <header class="custom-neutral shadow text-gray-100">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <img src="/workspaces/CI4-Book-Store/backend/app/Views/user/business-header-logo.png" alt="Achlys Bookstore Logo" class="h-12 md:h-16 object-contain" />
            <nav>
                <div class="flex space-x-8 h-full">
                    <a href="#features" class="btn-main text-base md:text-lg px-6 py-2 rounded-full bg-white bg-opacity-80 text-gray-800 shadow-lg hover:bg-opacity-100 transition flex items-center h-full">
                        Products
                    </a>
                    <a href="#about" class="btn-main text-base md:text-lg px-6 py-2 rounded-full bg-white bg-opacity-80 text-gray-800 shadow-lg hover:bg-opacity-100 transition flex items-center h-full">
                        Services
                    </a>
                    <a href="#contact" class="btn-main text-base md:text-lg px-6 py-2 rounded-full bg-white bg-opacity-80 text-gray-800 shadow-lg hover:bg-opacity-100 transition flex items-center h-full">
                        About
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="py-32 flex-grow flex items-center">
        <div class="max-w-4xl text-center">
            <h2 class="text-6xl md:text-7xl font-bold mb-8 text-gray-50">
                Welcome to Achlys Bookstore
            </h2>
            <p class="text-2xl md:text-3xl mb-12 text-gray-200">
                Your cozy corner for buying books and exploring different genres you've never experienced before!
            </p>
            <a href="#contact" class="btn-main text-xl md:text-2xl px-10 py-5 rounded-full bg-white bg-opacity-80 text-gray-800 shadow-lg hover:bg-opacity-100 transition">
                Start Reading
            </a>
        </div>
    </section>

    <footer class="custom-neutral text-gray-100 text-center py-6">
        &copy; <?php echo date('Y'); ?> Achlys Bookstore. All rights reserved.
    </footer>
</div>
</body>
</html>
