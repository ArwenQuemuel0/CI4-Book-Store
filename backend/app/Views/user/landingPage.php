<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Achlys Bookstore – Mood Board</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titan+One&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <style>
    
    body { font-family: 'Roboto Slab', serif; background:#ffffff; }
    h1,h2,h3,.heading { font-family: 'Titan One', cursive; }
    .color-swatch { width: 80px; height: 40px; border-radius: 0.375rem; }
  </style>
</head>
<body class="text-gray-800 p-8">
  <h1 class="text-4xl mb-2 heading">Mood Board</h1>
  <p class="mb-8 text-lg">Visual identity samples for Achlys Bookstore</p>

  <!-- Color Palette -->
  <section class="mb-12">
    <h2 class="text-2xl mb-4 heading">Color system</h2>
    <p class="mb-6">Three main colors with light and dark tints. Hex codes below.</p>
    <div class="grid grid-cols-3 gap-8">
      <div>
        <div class="flex space-x-2 mb-2">
          <div class="color-swatch" style="background:#8B7E74"></div>
          <div class="color-swatch" style="background:#A99D92"></div>
          <div class="color-swatch" style="background:#C7BBB0"></div>
        </div>
        <p class="font-bold">Neutral Brown (Accent)</p>
        <p>#8B7E74 – #A99D92 – #C7BBB0</p>
      </div>
      <div>
        <div class="flex space-x-2 mb-2">
          <div class="color-swatch" style="background:#F5F0EC"></div>
          <div class="color-swatch" style="background:#E8E1DB"></div>
          <div class="color-swatch" style="background:#DAD3CC"></div>
        </div>
        <p class="font-bold">Soft Beige (Background)</p>
        <p>#F5F0EC – #E8E1DB – #DAD3CC</p>
      </div>
      <div>
        <div class="flex space-x-2 mb-2">
          <div class="color-swatch" style="background:#333333"></div>
          <div class="color-swatch" style="background:#555555"></div>
          <div class="color-swatch" style="background:#777777"></div>
        </div>
        <p class="font-bold">Charcoal Gray (Text)</p>
        <p>#333333 – #555555 – #777777</p>
      </div>
    </div>
  </section>

  <!-- Typography -->
  <section class="mb-12">
    <h2 class="text-2xl mb-4 heading">Typography</h2>
    <p><span class="font-bold">Heading font:</span> <span class="heading">Titan One – Heading Example</span></p>
    <p><span class="font-bold">Body font:</span> Roboto Slab — example paragraph for body text readability.</p>
  </section>

  <!-- Buttons -->
  <section class="mb-12">
    <h2 class="text-2xl mb-4 heading">Buttons</h2>
    <div class="flex flex-wrap gap-4 mb-4">
      <button class="bg-[#8B7E74] text-white px-5 py-2 rounded-full shadow hover:bg-[#A99D92]">Primary</button>
      <button class="bg-[#C7BBB0] text-gray-800 px-5 py-2 rounded-full shadow hover:bg-[#A99D92]">Secondary</button>
      <button class="border border-[#8B7E74] text-[#8B7E74] px-5 py-2 rounded-full hover:bg-gray-100">Border</button>
      <button class="bg-gray-400 text-gray-700 px-5 py-2 rounded-full cursor-not-allowed opacity-50">Disabled</button>
    </div>
  </section>

  <!-- Card Sample -->
  <section class="mb-12">
    <h2 class="text-2xl mb-4 heading">Card sample</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="border border-gray-300 rounded-lg p-4">
        <h3 class="heading text-xl">1,254</h3>
        <p class="mb-2">Books Sold</p>
        <a href="#" class="text-[#8B7E74] underline">Read more</a>
      </div>
      <div class="border border-gray-300 rounded-lg p-4">
        <h3 class="heading text-xl">Premium Collection</h3>
        <p class="mb-2">Hand-picked limited edition books for collectors.</p>
        <a href="#" class="text-[#8B7E74] underline">Read more</a>
      </div>
      <div class="border border-gray-300 rounded-lg p-4">
        <blockquote class="italic">“A cozy place for every book lover.”</blockquote>
        <p class="mt-2">— Loyal Customer</p>
      </div>
    </div>
  </section>

  <!-- Logos -->
  <section>
    <h2 class="text-2xl mb-4 heading">Logos</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="border rounded-lg p-4 flex flex-col items-center">
        <div class="w-24 h-24 bg-[#8B7E74] rounded-full"></div>
        <p class="mt-2">Main – Circle</p>
      </div>
      <div class="border rounded-lg p-4 flex flex-col items-center">
        <div class="w-24 h-24 bg-[#8B7E74]"></div>
        <p class="mt-2">Main – Square</p>
      </div>
    </div>
  </section>
</body>
</html>
