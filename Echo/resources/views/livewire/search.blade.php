
   <div class="menu-vertical">
        <aside>
            <div class="px-6 py-3 items-center">
                Buscar: <input wire:model="buscador" placeholder="Contenido a buscar" class="border-4" />
            </div>
        </aside>
        <section>
            @if ($ofertas_empleo->count())
            
                <table>
                    <thead>
                        <tr>
                            <th class="cursor-pointer flex justify-around" wire:click="ordenar('puesto_id')">
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
                            </th>
                            <th class="cursor-pointer " wire:click="ordenar('empresa_id')">
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
                            </th>
                            <th>Vacantes</th>
                            <th>Fecha Publicación</th>
                            <th>Fecha Expiración</th>
                            <th>Requisitos</th>
                            <th>Salario</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ofertas_empleo as $oferta)
                            <tr>
                                <td>{{$oferta ->puesto->nombre}}</td>
                                <td>{{$oferta ->empresa->nombre}}</td>
                                <td>{{$oferta ->numpuestos}}</td>
                                <td>{{$oferta ->fecha_publicacion}}</td>
                                <td>{{$oferta ->fecha_cierre}}</td>
                                <td>{{$oferta ->requisitos}}</td>
                                <td>{{$oferta ->salario}}</td>
                                <td> 
                                    <form action="{{ route('solicitudes.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="oferta_id" value="{{$oferta ->id}}">
                                        <button class="btn btn-primary" type="submit">Solicitar</button>
                                    </form>
                                </td>
                            </tr>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            @else
                <div class="px-6 py-3 items-center">
                No se ha encontrado ningua oferta
            </div>
            @endif
        </section>
    </div>




