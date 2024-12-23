<style>
  /* Estado inicial para los elementos */
.observed {
opacity: 0;
transform: translateX(-60px); /* Desplaza el elemento hacia la izquierda inicialmente */
transition: opacity 0.9s ease, transform 0.9s ease; /* Transición suave para las propiedades */
}

/* Animación para aparecer (fade hacia la derecha) */
.animate-slide-in {
opacity: 1;
transform: translateX(0); /* Regresa a su posición original */
}

/* Animación para desaparecer */
.animate-slide-out {
opacity: 0;
transform: translateX(20px); /* Desplaza el elemento hacia la derecha al desaparecer */
} 
</style>
<div class="relative overflow-hidden py-14 sm:py-22">
    <img src="https://laracasts.com/images/home/teacher-grid-bg.svg" alt="" loading="lazy" class="absolute fondo mix-blend-luminosity xl:inline-block inset-0 -z-10 size-full object-cover object-right md:object-center">

    <div class=" mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            <div class=" mx-auto max-w-2xl lg:mx-0">
              <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Nuestros Servicios</h2>
              <p class=" mt-8 text-pretty text-lg font-medium  text-gray-300 sm:text-xl/8">Soluciones web a medida, optimizadas con las últimas tecnologías. Desarrollamos sitios web y aplicaciones móviles con las mejores tecnologías, asegurando una experiencia visualmente impactante y fácil de personalizar. Además, ofrecemos consultoría técnica y seguridad informática para que tu negocio esté siempre a la vanguardia.</p>
            </div>
            <div class="observed relative z-10  lg:block">
              <div class="mt-1 flex">
                <div class="relative shrink-0 p-4 hidden lg:block">
                  <div class="relative z-10 overflow-hidden rounded-sm ring-1 shadow-xl ring-slate-900/5">
                    <img class="h-[304px] w-[266px]" src="">
                  </div>
                  <div class="z-0">
                    <div class="absolute top-0 -right-12 left-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute -top-8 bottom-0 left-12 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute -right-12 bottom-14 left-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute -top-2 right-0 -bottom-8 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                    </div>
                    <div class="absolute right-10 bottom-full -mb-px flex h-8 items-end overflow-hidden">
                      <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                        <div class="w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)] blur-xs">
                          </div>
                          <div class="-ml-[100%] w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)] blur-[1px]">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="relative mt-14 shrink-0 p-4 mx-auto w-full sm:w-[266px]" >
                      <div class="overflow-hidden rounded-sm ring-1 shadow-xl ring-slate-900/5">
                        <img class="h-[354px] lg:w-[236px] sm:w-[266px]" src="">
                      </div>
                      <div>
                        <div class="absolute top-0 -right-8 -left-4 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                        </div>
                        <div class="absolute -top-20 right-0 -bottom-12 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                        </div>
                        <div class="absolute -right-8 bottom-0 -left-4 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                        </div>
                        <div class="absolute top-[calc(100%-1px)] right-10 -mb-px flex h-8 items-start overflow-hidden">
                          <div class="flex -mt-px h-[2px] w-80 -scale-x-100">
                            <div class="w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)] blur-xs">
                              </div>
                              <div class="-ml-[100%] w-full flex-none [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)] blur-[1px]">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
        
          <dl class="grid max-w-xl  gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-4 lg:gap-y-16">
            <div class="observed relative pl-16 rounded-lg ring-1 ring-white/[0.03] transition duration-300 dark:hover:ring-zinc-700">
              <a href="">
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    <path d="M31.25 12.75h-8.5a2 2 0 00-2 2v16.5a2 2 0 002 2h8.5a2 2 0 002-2v-16.5a2 2 0 00-2-2z" class="fill-white stroke-sky-500"></path>
                    <path d="M26.75 30.25h.5" class="stroke-sky-500"></path>
                  </svg>
                </div>
                Desarrollo Móvil
              </dt>
              <dd class="mt-2 text-sm p-2 text-gray-600 sm:text-base">
                Desarrollamos aplicaciones móviles a la medida, garantizando funcionalidad, diseño intuitivo y tecnología de vanguardia para potenciar tu negocio.
              </dd>
              <!-- El SVG ahora está en la parte inferior derecha -->
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg>
            </a>
            </div>
            <div class="observed relative pl-16  rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700  ">
              <a href="">
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    <path d="M10 14h20a1.5 1.5 0 011.5 1.5v10a1.5 1.5 0 01-1.5 1.5H10a1.5 1.5 0 01-1.5-1.5v-10A1.5 1.5 0 0110 14z" class="fill-white stroke-sky-500"></path>
                    <path d="M8 26h24a1 1 0 011 1v1a1 1 0 01-1 1H8a1 1 0 01-1-1v-1a1 1 0 011-1z" class="fill-gray-200 stroke-sky-500"></path>
                  </svg>
                </div>
                Desarrollo Web
              </dt>
              <dd class="mt-2 text-sm p-2 mb-2 text-gray-600 sm:text-base">Transformamos ideas en experiencias digitales impactantes. Construimos sitios web funcionales, modernos y adaptados a las necesidades de tu negocio, con un enfoque en rendimiento y diseño eficiente.</dd>
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg> 
            </a>  
            </div>
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
              <a href="">
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <!-- Cuadro similar al fondo -->
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                  
                    <!-- Gear Icon -->
                    <g transform="translate(9, 3)">
                    <path d="M20 13a4 4 0 110 8 4 4 0 010-8z" class="fill-white stroke-sky-500"></path>
                    <path d="M20 9v2m0 10v2m-6-6H12m14 0h-2M16.6 16.6l-1.4 1.4M24.8 16.6l1.4 1.4M16.6 23.4l-1.4-1.4M24.8 23.4l1.4-1.4" class="stroke-sky-500"></path>
                  
                    <!-- Speech Bubble -->
                    <path d="M10 28h10a2 2 0 002-2v-4a2 2 0 00-2-2H10a2 2 0 00-2 2v4a2 2 0 002 2z" class="fill-white stroke-sky-500"></path>
                    <path d="M12 26h6" class="stroke-sky-500"></path>
                    </g>
                  </svg>
                </div>
                Consultoria técnica
              </dt>
              <dd class="mt-2 text-sm p-2 mb-2 text-gray-600 sm:text-base">Maximiza el potencial de tu negocio con nuestra consultoría técnica. Ofrecemos soluciones personalizadas que optimizan tus procesos y garantizan resultados efectivos. ¡Confía en expertos para transformar tus ideas en éxito!</dd>
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg>  
            </a> 
            </div>
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
             <a href="">
              <dt class="text-base/7 font-semibold text-white mt-3">
                <div class="absolute left-3 top-3 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                  <svg class="size-10 shrink-0 transform-cpu rounded-lg shadow-md shadow-sky-500/[.12]" viewBox="0 0 40 40" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M.75 8A7.25 7.25 0 018 .75h24A7.25 7.25 0 0139.25 8v24A7.25 7.25 0 0132 39.25H8A7.25 7.25 0 01.75 32V8z" class="fill-gray-900 stroke-sky-500"></path>
                    <path opacity="0.4" d="M17.25 33.25h-8.5a2 2 0 01-2-2V8.75a2 2 0 012-2h22.5a2 2 0 012 2v1m-4 3h-18.5" class="stroke-sky-500/40"></path>
                    
                    <!-- Candado en la misma posición que el móvil, sin deformarse -->
                    <g transform="translate(16, 21)">
                      <path d="M4 0v-3a4 4 0 018 0v3h-3v-3a1 1 0 00-2 0v3h-3z" class="fill-white stroke-sky-500"></path>
                      <path d="M1 0h14a1 1 0 011 1v7a1 1 0 01-1 1H1a1 1 0 01-1-1v-7A1 1 0 011 0z" class="fill-white stroke-sky-500"></path>
                      <path d="M-1 7h18a1 1 0 011 1v1a1 1 0 01-1 1H-1a1 1 0 01-1-1v-1a1 1 0 011-1z" class="fill-gray-200 stroke-sky-500"></path>
                    </g>
                  </svg>
                  
                  
                </div>
                Seguridad
              </dt>
              <dd class="mt-2 text-sm p-2 mb-2 text-gray-600 sm:text-base">Ofrecemos soluciones de seguridad personalizadas, protegiendo tus datos y sistemas con tecnología confiable para que puedas enfocarte en lo que importa con total tranquilidad.</dd>
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-right-circle absolute right-0 bottom-0 mr-3 mb-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
              </svg>   
            </a>
            </div>
          </dl>
        
      </div>
    </div>
  </div>

  <div class="relative    py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
        <div class="max-w-xl lg:max-w-lg">
          <h2 class="text-4xl font-semibold tracking-tight text-white">¡Cotiza tu proyecto!</h2>
          <p class="mt-4 text-lg text-gray-300">Aquí puedes contactarnos para cotizar tu proyecto. </br> Tú lo imaginas y nosotros lo hacemos realidad.</p>
          <form id="contact-form" action="mailto:zeloga50@gmail.com" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div class="col-span-full">
              <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
              <div class="mt-2">
                <textarea name="about" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
              <p class="mt-3 text-sm/6 text-gray-600">Escribenos tu propuesta.</p>
            </div>
          
            <div class="mt-6 flex max-w-md gap-x-4">
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" placeholder="Ingresa tu email">
            </div>
          
            <div class="mt-6">
              <button type="submit" id="submit-btn" class="flex-none rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Enviar</button>
            </div>
          </form>
          
          <!-- Alerta personalizada -->
          <div id="alert" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 z-50 hidden">
            <div class="bg-white p-3 rounded-md shadow-lg w-full sm:w-1 md:w-1 lg:w-1/3 text-center">
              <p id="alert-message" class="text-xl text-gray-700"></p>
            </div>
          </div>
        </div>
        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
          <div class="flex flex-col items-start">
            <div class="observed rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
              </svg>
            </div>
            <dt class="mt-4 text-base font-semibold text-white">Estamos siempre para ti</dt>
            <dd class="mt-2 text-base/7 text-gray-400">Te contactaremos lo más pronto posible despues de tu mensaje.</dd>
          </div>
          <div class="flex flex-col items-start">
            <div class="observed rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
              </svg>
            </div>
            <dt class="mt-4 text-base font-semibold text-white">No spam</dt>
            <dd class="mt-2 text-base/7 text-gray-400">El uso de tu correo esta protegido y no se prestará para servicios de spam.</dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
      <div class="aspect-[1155/678] w-[95vw] sm:w-[52.1875rem] max-w-full bg-gradient-to-tr from-[#3b82f6] to-[#3b82f6] opacity-30" 
           style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const element = entry.target;

        if (entry.isIntersecting && element.dataset.visible !== "true") {
          // Elemento entra a la vista
          element.classList.add("animate-slide-in");
          element.classList.remove("animate-slide-out");
          element.dataset.visible = "true"; // Marca como visible
        } else if (!entry.isIntersecting && element.dataset.visible !== "false") {
          // Elemento sale de la vista
          element.classList.add("animate-slide-out");
          element.classList.remove("animate-slide-in");
          element.dataset.visible = "false"; // Marca como no visible
        }
      });
    },
    { threshold: 0.1 } // Sensibilidad del observador
  );

  // Inicializar elementos observados
  const observedElements = document.querySelectorAll(".observed");
  observedElements.forEach((el) => {
    el.dataset.visible = "false"; // Inicializa como no visible
    observer.observe(el);
  });
});

  </script>
<script>
  document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const aboutField = document.getElementById('about');
    const emailField = document.getElementById('email-address');
    const submitBtn = document.getElementById('submit-btn');
    const alertDiv = document.getElementById('alert');
    const alertMessage = document.getElementById('alert-message');
    const closeAlertBtn = document.getElementById('close-alert');

    // Validación de campos
    if (!aboutField.value.trim() || aboutField.value.length < 10) {
      showAlert('Por favor, completa el campo de texto.');
      return;
    }

    if (!emailField.value.trim()) {
      showAlert('Por favor, ingresa tu email.');
      return;
    }

    // Si los campos están completos
    showAlert('Formulario enviado exitosamente!');
    aboutField.value = '';  // Limpiar campo "About"
    emailField.value = '';  // Limpiar campo "Email"
  });

  function showAlert(message) {
    const alertDiv = document.getElementById('alert');
    const alertMessage = document.getElementById('alert-message');
    
    alertMessage.textContent = message;
    alertDiv.classList.remove('hidden');

    // Cerrar la alerta después de 3 segundos
    setTimeout(() => {
      alertDiv.classList.add('hidden');
    }, 1000);
  }


</script>