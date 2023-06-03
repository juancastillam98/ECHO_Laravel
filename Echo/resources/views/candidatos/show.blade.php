
<x-app-layout>
        <link rel="stylesheet" href="{{asset('css/candidato.css')}}">

        <div class="wrapper">
            <aside class="sidebar bg-color-fondo-200 border-cyan-300 blue-shadow b-radius-xl">
                <div id ="sidebar-foto" class="sidebar-text flex flex-col h-100 justify-center text-center">

                    @if (!$candidato->foto)
                        <form id="foto-form" method="post" action="{{ route('candidatos.update_photo', ['candidato'=>$candidato->id]) }}" enctype="multipart/form-data">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="flex justify-center">
                                {{-- <label for="foto" class="block mb-2 text-sm font-medium">Foto</label> --}}
                                <input type="file" id="foto" name="foto" class="foto-input texto-input-centro rounded-full w-48 h-48 focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700" placeholder="foto">
                            </div>
                        </form>
                    @else
                        <form id="foto-form" method="post" action="{{ route('candidatos.update_photo', ['candidato'=>$candidato->id]) }}" enctype="multipart/form-data">
                                {{method_field('PUT')}}
                            @csrf
                                {{-- <img src="{{ asset('storage/img_users/' . $candidato->foto) }}" alt="Foto de perfil" class="rounded-full w-48 h-48"> --}}
                                <img  class ="mx-auto block max-w-full h-3/4 w-3/4 bg-primary rounded-full mb-4 p-3" src="{{ asset('storage/img_users/' . $candidato->foto) }}" alt="Foto de perfil">

                            <div class="flex justify-center mt-4">
                                <label for="foto" class="btn-principal text-white font-bold cursor-pointer">Cambiar foto</label>
                                <input type="file" id="foto" name="foto" class="foto-input hidden" accept="image/*">
                                {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-4">Guardar cambios</button> --}}
                            </div>
                        </form>

                    @endif                    
                    <h1 class="font-weight-bold">Kate Glover</h1>
                    <p class="mb-4 color-texto-blanco">
                        Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem. Lorem at sit dolor dolores sed diam justo
                    </p>
                    <div class="flex justify-center mb-5">
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                                <button class="btn-principal font-bold cursor-pointer mt-auto" type="submit">Contratame</button>
                </div>
                <div class="sidebar-icon flex flex-col h-100 justify-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </aside>

            <section class="content bg-color-fondo-300">

                <!-- Experience Start -->
                <div class="container bg-color-fondo-200 p-0 mb-10 border-cyan-300 blue-shadow b-radius-xl">
                    <div class="p-6  rounded-lg shadow">
                        <h2 class="text-3xl mb-2 font-bold tracking-tight">Experiencia laboral</h2>
                            <textarea name="candidato_habilidades" id="candidato_habilidades"  class="b-radius-xl color-texto-negro " rows="10">{{$candidato->experiencia_laboral}}</textarea>
                            <a href="#" class="btn-principal text-white font-bold cursor-pointer flex justify-center items-center w-36 mt-1">
                            Ver todo
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 -mr-1">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5zm8.25-3.75a.75.75 0 01.75.75v2.25h2.25a.75.75 0 010 1.5h-2.25v2.25a.75.75 0 01-1.5 0v-2.25H7.5a.75.75 0 010-1.5h2.25V7.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg>

                        </a>
                    </div>

                </div>

                <!-- Carousel End -->
                
                
                <!-- Educación  -->
                <div class="container bg-white pt-5">

                </div>

                 <!-- Experience Start -->
                <div class="container bg-color-fondo-200 p-0 mb-10 border-cyan-300 blue-shadow b-radius-xl">
                    <div class="p-6  rounded-lg shadow">
                        <h2 class="text-3xl mb-2 font-bold tracking-tight">Habilidades laboral</h2>
                            <textarea name="candidato_habilidades" id="candidato_habilidades"  class="b-radius-xl color-texto-negro " rows="10">{{$candidato->habilidades}}</textarea>
                            <a href="#" class="btn-principal text-white font-bold cursor-pointer flex justify-center items-center w-36 mt-1">
                            Ver todo
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 -mr-1">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5zm8.25-3.75a.75.75 0 01.75.75v2.25h2.25a.75.75 0 010 1.5h-2.25v2.25a.75.75 0 01-1.5 0v-2.25H7.5a.75.75 0 010-1.5h2.25V7.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                 <!-- LOREM  -->
                <div class="container bg-color-fondo-200 p-0 mb-10 border-cyan-300 blue-shadow b-radius-xl">
                    <div class="p-6  rounded-lg shadow">
                        <h2 class="text-3xl mb-2 font-bold tracking-tight">Lorem</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, aspernatur? Corporis, porro doloremque voluptatem, ab maiores culpa enim velit, dolore reprehenderit odio officiis ad perspiciatis laboriosam corrupti asperiores quo saepe laudantium? Alias doloremque doloribus possimus vitae placeat, nihil molestias dicta nemo. Tempore numquam, esse ullam adipisci eos sapiente eius vero molestiae velit perferendis veritatis quidem eligendi repellendus minus voluptatibus ad? Eaque similique laudantium magnam tenetur in. Recusandae suscipit placeat voluptatem earum quod eum dolorem molestiae perferendis, nobis cum nisi, reprehenderit nam officiis quibusdam quidem excepturi quam. Saepe ratione at, velit ab quibusdam laudantium perspiciatis accusamus illum porro ex voluptates sit debitis labore expedita vero explicabo, dolorum inventore quaerat cupiditate quia obcaecati placeat corrupti natus. Voluptates pariatur dicta ipsam repellat obcaecati labore quam corporis natus, nulla omnis magnam delectus totam ducimus, alias nihil debitis vel tempora illum corrupti aliquid impedit nesciunt quidem? Expedita eos corporis nesciunt enim, temporibus odio at rerum labore amet autem suscipit adipisci dignissimos vel excepturi corrupti magni? Error, quos atque provident magni mollitia, praesentium voluptatum alias distinctio sed neque quidem ipsa fugit omnis cupiditate explicabo dolorum modi officiis eius minima perspiciatis ex nisi. Quas ea libero iste dicta itaque possimus sit voluptatibus exercitationem ducimus, voluptatem voluptas repellat.</p>
                            <a href="#" class="btn-principal text-white font-bold cursor-pointer flex justify-center items-center w-36 mt-1">
                            Ver todo
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 -mr-1">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5zm8.25-3.75a.75.75 0 01.75.75v2.25h2.25a.75.75 0 010 1.5h-2.25v2.25a.75.75 0 01-1.5 0v-2.25H7.5a.75.75 0 010-1.5h2.25V7.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
               
               
 
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        

</x-app-layout>
