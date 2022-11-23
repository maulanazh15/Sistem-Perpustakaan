<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;700;800;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <title>Coba Tailwind</title>
</head>

<body class="font-inter">

  <div class="container px-6 font-inter max-w-md mx-auto p-2 rounded-md sm:max-w-xl md:max-w-full lg:flex-1">
    <h3 class="text-4xl sm:text-5xl font-bold text-blue-900">
      Ace Lancester
    </h3>
    <img src="https://source.unsplash.com/600x400?" alt="laptop"
      class="mt-4 rounded-xl shadow-lg mb-4 sm:mt-8 sm:h-64 sm:w-full md:max-w-full sm:object-cover sm:object-center lg:hidden">
    <h2 class="text-2xl font-semibold mb-3 text-slate-700 sm:mt-3 sm:text-3xl">Belajar Tailwind</h2>
    <p class="text-slate-600 sm:mt-3 sm:text-2xl ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex odio
      tenetur provident quaerat? Mollitia maxime enim obcaecati repellendus eligendi officia nostrum tenetur dolore cum
      ut error, sit modi, repudiandae rem eum excepturi officiis aut, aspernatur fuga nisi. </p>
    <div class="mt-4 sm:mt-6">
      <a href="#"
        class="inline-block px-5 py-3 bg-red-400 text-white rounded-lg shadow-lg uppercase font-semibold tracking-wider text-sm sm:text-base">Subscribe
        Channel Youtube</a>
    </div>
  </div>
  <div class="lg:flex hidden lg:w-1/2 bg-red-300 ">
    <img src="https://source.unsplash.com/600x400?" class="lg:object-cover rounded-tl-2xl rounded-bl-2xl">
  </div>

  <hr class="my-10">

  <h2 class="mt-24 mb-5 text-center font-bold text-3xl text-blue-900 mx-auto">My Gallery</h2>
  <div></div>
  <div class="container mx-auto px-6 sm:flex sm:flex-wrap sm:gap-4 sm:justify-evenly bg-white">
    <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72">
      <img src="https://source.unsplash.com/600x400?" class="w-full">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-3 text-slate-700">
          Image Title
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse nobis, placeat quo neque</p>
      </div>
    </div>
    <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg-72">
      <img src="https://source.unsplash.com/600x400?" class="w-full">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-3 text-slate-700">
          Image Title
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse nobis, placeat quo neque</p>
      </div>
    </div>
    <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg-72">
      <img src="https://source.unsplash.com/600x400?" class="w-full">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-3 text-slate-700">
          Image Title
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse nobis, placeat quo neque</p>
      </div>
    </div>
    <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg-72">
      <img src="https://source.unsplash.com/600x400?" class="w-full">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-3 text-slate-700">
          Image Title
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse nobis, placeat quo neque</p>
      </div>
    </div>
    <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg-72">
      <img src="https://source.unsplash.com/600x400?" class="w-full">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-3 text-slate-700">
          Image Title
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse nobis, placeat quo neque</p>
      </div>
    </div>
    
  </div>

  <hr class="mb-28">

  <div class="mt-64 p-2 grid grid-cols-2 gap-2 md:grid-cols-4 md:p-4">
    <h2 class="text-xl font-semibold text-slate-700 md:col-start-4 md:row-start-2 md:flex"><span class="self-center">Welcome to My Gallery</span></h2>
    <div class="h-15 text-lg font-bold text-slate-600 md:col-start-2 md:row-start-2 md:flex"><span class="md:self-end">@acelan</span></div>

    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?technology')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 md:col-start-3">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?fashion')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?fun')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?sad')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?pastel')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 md:col-start-2">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?sports')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 md:col-start-4">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?beach')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?mountain')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 md:col-start-3">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?sea')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
    <div class="h-15 bg-blue-500 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 md:col-start-3">
      <div class="w-full h-full bg-[url('https://source.unsplash.com/600x480?relax')] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
    </div>
   
  </div>


  <footer class="mt-96">

  </footer>
</body>

</html>