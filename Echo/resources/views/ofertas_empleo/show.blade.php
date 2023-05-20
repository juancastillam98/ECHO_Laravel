<x-app-layout>{{-- x-app-layut importa el nav y el header--}}
    <x-slot name="header">
        <h1 class="text-4xl font-extrabold my-3">Listado de las ofertas de empleo</h1>
    </x-slot>
    <div class="container mx-auto px-2 bg-color-fondo-300 color-texto-blanco mt-8">
        

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left color-texto-blanco bg-color-fondo-200">
                    <thead class="bg-color-principal text-sm uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Puesto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ofertas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Solicitudes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Ver</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($oferta_solicitudes as $solicitudes)
                            <tr class=" border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$solicitudes ->puesto}}
                                </th>
                                <td class="px-6 py-4">
                                    <td>{{$solicitudes ->oferta}}</td>
                                </td>
                                <td class="px-6 py-4">
                                    <td>{{$solicitudes ->total_solicitudes}}</td>  
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <form action="{{ route('ofertas_empleo.list_users_information', [
                                        'oferta_id'=>$solicitudes->id_oferta,
                                        'puesto_id'=>$puesto_id->id, 
                                        'empresa_id'=>$empresa_id->id
                                        ])}}" method="get">
                                        <button class="btn-principal font-bold cursor-pointer" type="submit">Ver Más</button>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

       
       
    </div>
                            
</x-app-layout>