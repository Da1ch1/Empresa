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
        <div>
          <dl class="grid max-w-xl  gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-4 lg:gap-y-16">
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
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
              <dd class="mt-2 text-base/7 text-gray-600">Desarrollamos aplicaciones móviles a la medida, garantizando funcionalidad, diseño intuitivo y tecnología de vanguardia para potenciar tu negocio.</dd>
            </div>
            <div class="observed relative pl-16  rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700  ">
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
              <dd class="mt-2 text-base/7 text-gray-600">Transformamos ideas en experiencias digitales impactantes. Construimos sitios web funcionales, modernos y adaptados a las necesidades de tu negocio, con un enfoque en rendimiento y diseño eficiente.</dd>
            </div>
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
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
              <dd class="mt-2 text-base/7 text-gray-600">Maximiza el potencial de tu negocio con nuestra consultoría técnica. Ofrecemos soluciones personalizadas que optimizan tus procesos y garantizan resultados efectivos. ¡Confía en expertos para transformar tus ideas en éxito!</dd>
            </div>
            <div class="observed relative pl-16 rounded-lg  ring-1 ring-white/[0.03] transition duration-300  dark:hover:ring-zinc-700">
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
              <dd class="mt-2 text-base/7 text-gray-600">Ofrecemos soluciones de seguridad personalizadas, protegiendo tus datos y sistemas con tecnología confiable para que puedas enfocarte en lo que importa con total tranquilidad.</dd>
            </div>
          </dl>
        </div>
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