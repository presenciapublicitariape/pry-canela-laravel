@extends('layouts.app')

@section('contenido')
<div class="container mx-auto px-5 pb-2 lg:px-16 lg:pt-6 mb-10">
    <div class="-m-1 flex flex-wrap md:-m-2">
      <div class="flex md:w-1/2 sm:w-full flex-wrap">
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-slate-800 p-1 md:p-2 opacity-75 bg-white">
                <h5 class="text-xs md:text-md font-semibold">
                  Mi Collage
                </h5>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im1.jpg') }}" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h5 class="text-xs md:text-md font-semibold">
                  Que onda...!!!
                </h5>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im3.jpg') }}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h5 class="text-xs md:text-md font-semibold">
                  Luchando por mis sueños
                </h5>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im2.jpg') }}" />
        </div>
      </div>
      <div class="flex md:w-1/2 sm:w-full flex-wrap">
        <div class="w-full p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-slate-800 p-1 md:p-2 opacity-75 bg-white">
                <h2 class="text-xs md:text-md font-semibold">
                  Holi :D
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im19.jpg') }}" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h2 class="text-xs md:text-md font-semibold">
                  Aqui hermosa
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im18.jpg') }}" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-slate-800 p-1 md:p-2 opacity-75 bg-white">
                <h2 class="text-xs md:text-md font-semibold">
                  Yo no fui, por la garrita
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im15.jpg') }}" />
        </div>
      </div>
      <div class="flex md:w-1/2 sm:w-full flex-wrap">
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h2 class="text-xs md:text-md font-semibold">
                  Toy enojada 
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im12.jpg') }}" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-slate-800 p-1 md:p-2 opacity-75 bg-white">
                <h2 class="text-xs md:text-md font-semibold">
                  Toy Sepsy ;)
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im20.jpg') }}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h2 class="text-xs md:text-md font-semibold">
                  Haciendo la mimision
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im7.jpg') }}" />
        </div>
      </div>
      <div class="flex md:w-1/2 sm:w-full flex-wrap">
        <div class="w-full p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h2 class="text-xs md:text-md font-semibold">
                  Gracias VillaMascota!!! - Doctora Sami
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im22.jpg') }}" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-between">
              <div class=" text-white p-1 md:p-2 opacity-75 bg-slate-800">
                <h2 class="text-xs md:text-md font-semibold">
                  Versión Sariguella :D
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im10.jpg') }}" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <div class="absolute flex ">
            <div class="items-center justify-center">
              <div class=" text-slate-800 p-1 md:p-2 opacity-75 bg-white">
                <h2 class="text-xs md:text-md font-semibold">
                  Aqui super tierna
                </h2>
              </div>
            </div>
          </div>
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('img/album/im17.jpg') }}" />
        </div>
      </div>
    </div>
  </div>
@endsection