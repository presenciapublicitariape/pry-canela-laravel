@extends('layouts.app')

@section('contenido')
<section>
    <div class="container">
        <div class="relative h-screen overflow-hidden bg-[url('{{ asset('img/globos_birthday.jpg') }}')] bg-cover bg-no-repeat p-5 text-center lg:h-screen">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
                <div class="mt-20"> &nbsp; </div>
                <div class="flex h-full items-center justify-center">
                    <div class="grid grid-cols-1 grid-rows-1 md:grid-cols-2">
                        <div class="block opacity-70 rounded-lg bg-white 
                        shadow-secondary-1 dark:bg-surface-dark
                        dark:text-white text-surface my-4 mx-2" >
                          <div class="p-6">
                            <h5 class="mb-2 md:text-lg sm:text-sm">
                              Mis Saluditos
                            </h5>
                            <div class="overflow-y-auto max-h-80">
                                @forelse ( $saluditos as $holas )
                                    <p class="mb-4 text-base text-left md:text-sm sm:text-xs text-violet-900">
                                        <strong>{{ $holas->nombre }} ({{ $holas->relacion }} {{ $holas->mascota }}): </strong>
                                        <br>
                                        <small>{{ $holas->created_at->diffForHumans() }}</small>
                                        <br>
                                        {{ $holas->saludo }}
                                    </p>
                                @empty
                                    <p class="mb-4 text-base text-left md:text-sm sm:text-xs text-violet-900">
                                        Aun no hay saluditos por el momento
                                    </p>
                                @endforelse
                            </div>
                          </div>
                        </div>
                      
                        <div
                          class="block rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark
                           dark:text-white text-surface mx-2">
                          <div class="p-6">
                            <h5
                              class="mb-2 md:text-lg sm:text-sm text-pink-700 font-medium leading-tight">
                              Déjame tu saluditos
                            </h5>
                            <form method="POST" action="{{ route('contacto.store') }}" novalidate>
                                @csrf
                                <div class="relative mb-3 m-4" data-twe-input-wrapper-init>
                                    <label for="nombre" class="text-pink-500"
                                      >Papito/Mamita Perruno
                                    </label>
                                    <input 
                                        type="text"
                                        class="peer block min-h-[auto] uppercase w-full rounded border-2 border-pink-200 px-3 py-[0.33rem] text-xs leading-[1.5] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-pink-300 data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-pink-300 dark:placeholder:text-pink-300 dark:autofill:shadow-autofill dark:peer-focus:text-pink-300 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                                        id="nombre"
                                        name="nombre"
                                        placeholder="Papito o Mamita: Nombre"
                                        value="{{ old('nombre') }}" />
                                    
                                </div>
                                <div class="relative mb-3 m-4" data-twe-input-wrapper-init>
                                    <label for="mascota" class="text-pink-500"
                                      >Tu(s) bebe(s) pelud@(s)
                                    </label>
                                    <input 
                                        type="text"
                                        class="peer block min-h-[auto] uppercase w-full rounded border-2 border-pink-200 px-3 py-[0.33rem] text-xs leading-[1.5] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-pink-300 data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-pink-300 dark:placeholder:text-pink-300 dark:autofill:shadow-autofill dark:peer-focus:text-pink-300 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                                        id="mascota"
                                        name="mascota"
                                        value="{{ old('mascota') }}" 
                                        placeholder="Nombre de tu(s) bebe(s) pelud@(s)" />
                                    
                                </div>
                                <div class="relative mb-3 m-4" data-twe-input-wrapper-init>
                                    <select name="relacion" id="relacion" class="peeer p-1 block pe-9 block w-full rounded border-2 text-pink-500 border-pink-200 text-sm focus:border-pink-500 focus:ring-pink-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-pink-400 dark:border-pink-700 dark:text-pink-400 dark:focus:ring-pink-400">
                                        <option selected>Amig@</option>
                                        <option>Familia</option>
                                      </select>
                                </div>
                                <div class="relative mb-3 m-4" data-twe-input-wrapper-init>
                                    <label for="saludo" class="text-pink-500">Tu Saludito</label>
                                    <textarea
                                      class="peer block min-h-[auto] w-full rounded border-2 text-pink-500 border-pink-200 px-3 py-[0.33rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-pink-300 data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-pink-300 dark:placeholder:text-pink-300 dark:peer-focus:text-pink-300 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                                      id="saludo"
                                      name="saludo"
                                      rows="2"
                                      placeholder="Tu Saludito">{{ old('saludo') }}</textarea>
                                </div>
                                <button
                                class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out hover:shadow-dark-2 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:shadow-dark-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                                type="submit"
                                data-twe-ripple-init
                                data-twe-ripple-color="light"
                                style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
                                Enviar Saludito
                                </button>
                            </form>
                            @if ($errors->any())
                                <div class="bg-red-50 border-b border-red-400 text-red-800 text-sm p-4 flex justify-between">
                                    <div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor" >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"
                                                    />
                                            </svg>
                                            <p><span class="font-bold">Error: </span> No ha completado todos los datos</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection