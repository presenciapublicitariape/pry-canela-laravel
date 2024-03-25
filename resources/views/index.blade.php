
@extends('layouts.app')

@section('contenido')
        {{-- Imagen de celebración - Inicio --}}
        <header>    
            <div class="relative h-screen overflow-hidden  
            bg-[url('{{ asset('img/backg_canela.jpg') }}')] 
            bg-cover sm:bg-right-bottom 
            bg-no-repeat p-20 sm:py-80 text-center lg:h-screen">
              <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
                <div class="flex h-full items-center justify-center">
                  <div class=" text-pink-600 mt-20 p-4">
                    <h2 class="md:mb-4 sm:mb-10 md:text-4xl sm:text-2xl md:font-semibold sm:font-bold">
                      Celebremos mi 1° año de Nacimiento
                    </h2>
                    <h4 class="mb-6 md:text-xl sm:text-lg md:p-4 sm:mx-10 font-semibold">
                      Gracias a Mi Mamita Estela y Papito Cristian
                    </h4>
                    <div class="mb-10">
                      <a
                        class="mb-1 inline-block 
                        rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 
                        text-xs font-medium uppercase leading-normal 
                        md:text-neutral-50 sm:text-slate-700 transition duration-150 ease-in-out 
                        hover:bg-pink-400 hover:text-white 
                        focus:border-pink-700 focus:text-pink-600 focus:outline-none focus:ring-0 
                        active:border-neutral-300 active:text-neutral-200 
                        dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                        href="{{ route('contacto') }}"
                        role="button"
                        data-twe-ripple-init
                        data-twe-ripple-color="light"
                        >Déjame tus Saluditos</a>
                      <a
                        class="mb-1 inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:bg-pink-400 hover:text-white focus:border-pink-700 focus:text-pink-600 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                        href="{{ route('portafolio') }}"
                        role="button"
                        data-twe-ripple-init
                        data-twe-ripple-color="light"
                        >Mira mis fotitos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
        {{-- Imagen de celebración - Fin --}}
@endsection