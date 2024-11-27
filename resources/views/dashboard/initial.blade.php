<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
<style>
    @font-face {
        font-family: 'Saint Self';
        src: url('path-to-saint-self-font.woff2') format('woff2');
    }
</style>
<div class="px-4">
    <div class="mx-auto max-w-7xl py-4 sm:px-6 sm:py-9 lg:px-8 relative w-full max-w-2xl lg:max-w-7xl" >
      <div style="background: rgb(5, 5, 5); border-radius: 25px" class="  rounded-lg ring-1  transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:ring-zinc-800 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20] relative isolate overflow-hidden px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
      <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
        <circle cx="512" cy="512" r="912" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
        <defs>
          <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
            <stop stop-color="#3b82f6" />
            <stop offset="1" stop-color="#E9" />
          </radialGradient>
        </defs>
      </svg>
      <div class="absolute left-0 top-0 z-20 flex gap-x-2 p-7" style="column-gap: .75rem;">
        <!-- Botón rojo con la "X" que aparece solo al hacer hover -->
        <button class="flex-center h-3 w-3 cursor-pointer rounded-full bg-red-500 text-xl font-bold  relative group transition-colors duration-300 hover:bg-red-600 hover:text-black">
          <!-- "X" dentro del botón rojo, ajustada al tamaño del botón -->
          <span class="absolute inset-0 flex justify-center items-center text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">✕</span>
        </button>
      
        <!-- Botones grises -->
        <div class="h-3 w-3 rounded-full bg-gray-500/10"></div>
        <div class="h-3 w-3 rounded-full bg-gray-500/10"></div>
      </div>
      
        <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
            <h2 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Kanit', 'Inter', 'Saint Self'; font-size: 40px;">
                Impulsa tu negocio con soluciones digitales a medida.<br>
                <span class="inline-block bg-gradient-to-r from-white via-blue-500 via-70% to-blue-700 bg-clip-text text-transparent">
                  Sitios web, apps móviles, APIs y más.
                </span>
              </h2>
          <p class="mt-6 text-pretty text-lg/8 text-gray-300">¡Innovamos para hacer crecer tu negocio!</p>
          <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
            <a href="#" style="background-color: #3b82f6; color:rgb(255, 255, 255)" class="rounded-md  px-3.5 py-2.5 text-sm font-semibold shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
            <a href="#" class="text-sm/6 font-semibold " style="color: rgb(194, 6, 6)">Learn more <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="relative mt-16 h-full lg:mt-8 flex items-end justify-center">
            <img class="w-full h-auto  object-contain mix-blend-mode-color-burn " src="{{asset('img/Robot.png')}}" alt="App screenshot" />
          </div>
      </div>
    </div>
  </div>