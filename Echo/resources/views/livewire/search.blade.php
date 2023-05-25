<div>
    {{-- Be like water. --}}
   {{--  <h1>Mis coches {{$usuarioActual->name}}</h1> --}}
    @if ($ofertasEmpleo->isNotEmpty())
        <h1>Mis coches {{ $ofertasEmpleo[0]->puesto->nombre }}</h1>
    @else
        <p>No hay ofertas de empleo disponibles.</p>
    @endif

    {{$buscador}}
    <div class="px-6 py-3 items-center">
        Buscar: <input wire:model="buscador" placeholder="Contenido a buscar" class="border-4" />
        
    </div>
    @if ($ofertas_empleo->count())
    
        <table>
            <thead>
                <tr>
                    <th class="cursor-pointer" wire:click="ordenar('puesto_id')">
                        Puesto
                        @if ($campoOrden === 'puesto_id')
                            {{ $sentido === "asc" ? '&#9650;' : '&#9660;' }}
                        @endif
                    </th>
                    <th class="cursor-pointer" wire:click="ordenar('empresa_id')">
                        Empresa
                        @if ($campoOrden === 'empresa_id')
                            {{ $sentido === "asc" ? '&#9650;' : '&#9660;' }}
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
            

</div>
