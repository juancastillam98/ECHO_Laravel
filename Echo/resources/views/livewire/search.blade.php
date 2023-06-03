
<div class="menu-vertical">
        <aside>
            <!--buscador-->
            <div class="px-2 pb-12 items-center mt-2.5">
                <div class="buscador">
                    <input wire:model.debounce.500ms="buscador" placeholder="Contenido a buscar" class="border-2" />
                    <div class="lupa bg-color-principal">
                        <svg fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </div>
            </div>
            <!--filtros-->
            <div class="wrapper">
                <div class="filtros rounded-lg bg-color-fondo-200 flex flex-col items-center my-6 border border-cyan-300 blue-shadow">
                    <label for="toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 color-texto-blanco">
                        <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0112 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 011.541 1.836v1.044a3 3 0 01-.879 2.121l-6.182 6.182a1.5 1.5 0 00-.439 1.061v2.927a3 3 0 01-1.658 2.684l-1.757.878A.75.75 0 019.75 21v-5.818a1.5 1.5 0 00-.44-1.06L3.13 7.938a3 3 0 01-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836z" clip-rule="evenodd" />
                        </svg>

                    </label>
                    <input type="checkbox" name="" id="toggle">
                    <div class="listado_filtros">
                        <div class="filtro-salario">
                            <div class="salary-input">
                                <div class="field">
                                    <span>Min</span>
                                    <input type="number" class="input-min color-texto-negro text-lg py-1.5 px-1.5" wire:model="rangoSalarialMin" value="0">
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                    <span>Max</span>
                                    <input type="number" class="input-max color-texto-negro text-lg py-1.5 px-1.5" wire:model="rangoSalarialMax" value="250000">
                                </div>
                            </div>

                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="250000" wire:model="rangoSalarialMin" value="0" wire:change="actualizarRangoSalarial">
                                <input type="range" class="range-max" min="0" max="250000" wire:model="rangoSalarialMax" value="249000" wire:change="actualizarRangoSalarial">
                            </div>
                        </div>
                        <div class="vacantes range">
                            <label for="rango_vacantes">Vacantes {{$rangoVacantes}}</label>
                            <div class="sliderValue">
                                <span id="spanVacantes">100</span>
                            </div>
                            <div class="field">
                                <div class="value left font-bold color-texto-blanco">0</div>
                                <input type="range" id="rango_vacantes" min="1" max="200" value="100" steps="2" wire:model="rangoVacantes">
                                <div class="value right font-bold color-texto-blanco">200</div>
                            </div>
                            <p>Vacantes: {{$rangoVacantes}}</p>
                        </div>

                    </div>

                </div>
            </div>

        </aside>

        <section>
            @if ($ofertas_empleo->count())

                <div class="flex flex-wrap justify-center mx-6 mb-6">
                    <button type="button" class="flex color-texto-blanco border border-cyan-300 bg-hover-principal focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1.5 my-2 " wire:click="ordenar('puesto_id')">
                        Puesto
                            @if ($campoOrden === 'puesto_id')
                                @if ($sentido === 'asc')
                                    <svg class="w-5" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                    </svg>
                                @else
                                    <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                @endif
                            @endif
                    </button>
                    <button type="button" class="flex color-texto-blanco border border-cyan-300 bg-hover-principal focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1.5 my-2" wire:click="ordenar('empresa_id')">
                        Empresa
                        @if ($campoOrden === 'empresa_id')
                            @if ($sentido === 'asc')
                                <svg class="w-5" fill="none" stroke="currentColor" strokeWidth={1.5} viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                </svg>>
                            @else
                                <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                </svg>
                            @endif
                        @endif
                    </button>
                    <button type="button" class="flex color-texto-blanco border border-cyan-300 bg-hover-principal focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1.5 my-2" wire:click="ordenar('puesto_id')">
                        Vacantes
                    </button>
                    <button type="button" class="flex color-texto-blanco border border-cyan-300 bg-hover-principal focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1.5 my-2" wire:click="ordenar('puesto_id')">
                        Fecha Publicación
                    </button>
                    <button type="button" class="flex color-texto-blanco border border-cyan-300 bg-hover-principal focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1.5 my-2" wire:click="ordenar('puesto_id')">
                        Fecha Expiración
                    </button>
                </div>


                <div class="flex flex-col mx-6">
                    @foreach ($ofertas_empleo as $oferta)

                        <div class="w-full border border-cyan-300 bg-color-fondo-200 bg-hover-principal b-radius-xl rounded-lg shadow color-texto-blanco p-2 mb-10">
                            <div class="flex justify-end px-4 pt-4">
                                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col px-5 color-texto-blanco -mt-6">
                                <h2 class="mb-2 text-3xl font-bold tracking-tight color-texto-blanco">{{$oferta ->puesto->nombre}}</h2>
                                <h3 class="text-2xl font-bold">{{$oferta ->empresa->nombre}}</h3>
                                <p class="font-bold">Vacantes {{$oferta ->numpuestos}}</p>
                                <p class="font-bold">Abierto desde {{$oferta ->fecha_publicacion}} hasta {{$oferta ->fecha_cierre}}</p>
                                <h4 class="mb-2 text-xl font-bold">Requisitos</h4>
                                <textarea  class="b-radius-xl color-texto-negro ">{{$oferta ->requisitos}}</textarea>
                                <p class="font-bold my-2">Salario: {{ $oferta->salario ? $oferta->salario : 'No especificado' }}</p>
                                

                                <div class="flex mt-4 space-x-3 md:mt-4 mb-3">
                                    <form action="{{ route('solicitudes.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="oferta_id" value="{{$oferta ->id}}">
                                        <button class="btn-principal text-white font-bold cursor-pointer" type="submit">Solicitar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @else
                <div class="px-6 py-3 items-center">
                No se ha encontrado ningua oferta
            </div>
            @endif
            @if ($ofertas_empleo->hasPages())
                <div>
                    {{$ofertas_empleo->links()}}
                </div>
            @endif
            
        </section>
    </div>




