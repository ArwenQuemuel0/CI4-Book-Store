<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mood Board – Achlys Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Two typography choices -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Titan+One&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto Slab', serif; }
        .heading-font { font-family: 'Titan One', cursive; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <div class="w-full max-w-2xl mx-auto flex flex-col items-center">
        <h1 class="heading-font text-4xl text-center mb-10">Achlys Bookstore – Mood Board</h1>

        <!-- Color Palette -->
        <section class="mb-12 w-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-4 text-center">Color Palette</h2>
            <div class="flex space-x-6 justify-center">
                <div class="w-24 h-24 rounded shadow" style="background-color:#8B7E74;"></div>
                <div class="w-24 h-24 rounded shadow" style="background-color:#F5E6CA;"></div>
                <div class="w-24 h-24 rounded shadow" style="background-color:#3E3E3E;"></div>
            </div>
            <p class="mt-4 text-gray-700 text-center">#8B7E74 (neutral), #F5E6CA (light beige), #3E3E3E (charcoal)</p>
        </section>

        <!-- Typography -->
        <section class="mb-12 w-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-4 text-center">Typography</h2>
            <p class="heading-font text-3xl mb-2 text-center">Titan One – for Headlines</p>
            <p class="text-xl text-center">Roboto Slab – for Body Text and Content</p>
        </section>

        <!-- Buttons Set -->
        <section class="mb-12 w-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-4 text-center">Buttons</h2>
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="px-6 py-3 rounded-full bg-[#8B7E74] text-white font-semibold shadow hover:bg-[#7a6e65]">Primary</button>
                <button class="px-6 py-3 rounded-full bg-[#F5E6CA] text-gray-800 font-semibold shadow hover:bg-[#e9d9b8]">Secondary</button>
                <button class="px-6 py-3 rounded-full border-2 border-[#8B7E74] text-[#8B7E74] font-semibold hover:bg-[#8B7E74] hover:text-white transition">Border</button>
                <button class="px-6 py-3 rounded-full bg-gray-400 text-gray-200 font-semibold cursor-not-allowed" disabled>Disabled</button>
            </div>
        </section>

        <!-- Card Sample -->
        <section class="mb-12 w-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-4 text-center">Card Sample</h2>
            <div class="bg-white rounded-xl shadow-lg max-w-sm p-6 flex flex-col items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIC25nqru3yN9lhtoTwdBWt_u0QlOcPzw3Bw&s" alt="Sample Book" class="rounded mb-4 mx-auto">
                <h3 class="heading-font text-2xl mb-2 text-center">Sample Book Title</h3>
                <p class="text-gray-700 mb-4 text-center">This is a sample description for a featured book card. It demonstrates the card layout style.</p>
                <button class="px-4 py-2 rounded-full bg-[#8B7E74] text-white font-semibold hover:bg-[#7a6e65]">Learn More</button>
            </div>
        </section>

        <!-- Logos -->
        <section class="w-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-4 text-center">Logos</h2>
            <div class="flex space-x-8 justify-center">
                <!-- Circle Logo -->
                <div class="w-32 h-32 rounded-full bg-[#8B7E74] flex items-center justify-center text-white heading-font text-3xl shadow">
                    A
                </div>
                <!-- Square Logo -->
                <div class="w-32 h-32 bg-[#8B7E74] flex items-center justify-center text-white heading-font text-3xl shadow">
                    A
                </div>
            </div>
            <p class="mt-4 text-gray-700 text-center">Circle and Square variants of the Achlys Bookstore logo (initial “A”).</p>
        </section>
    </div>
</body>
</html>
