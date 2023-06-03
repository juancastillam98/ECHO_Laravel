

<div>
    <input type="text" wire:model.debounce.300ms="busqueda" placeholder="Buscar ofertas de empleo">
    <label for="rango_salarial">Rango Salarial</label>
    <input type="range" id="rango_salarial" name="rango_salarial" min="0" max="5000">
    
    
    <table>
        <thead>
            <tr>
                <th>Puesto</th>
                <th>Empresa</th>
                <th>Vacantes</th>
                <th>Fecha Publicación</th>
                <th>Fecha Expiración</th>
                <th>Requisitos</th>
                <th>Salario</th>
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
</div>


