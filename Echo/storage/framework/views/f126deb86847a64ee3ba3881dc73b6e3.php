<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
        <h1 class="text-4xl font-extrabold my-3">Listado de solicitantes</h1>
     <?php $__env->endSlot(); ?>

        <section>
            <div class="grid grid-cols-1 place-items-center md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 "> 
            <?php $__currentLoopData = $candidatos_solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidato_solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full max-w-xs border border-cyan-300 bg-color-fondo-200 bg-hover-principal b-radius-xl rounded-lg shadow color-texto-blanco">
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
                    <div class="flex flex-col items-center pb-10 color-texto-blanco">
                        <img  class ="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?php echo e(asset('storage/img_users/' . $candidato_solicitud->foto)); ?>" alt="Foto usuario">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight color-texto-blanco"><?php echo e($candidato_solicitud ->nombre); ?></h4>
                        <div class="flex items-center pr-0.5 py-1">
                            <svg width="30" height="35" viewBox="0 0 41 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.8779 7.21179H8.38891C7.05398 7.21179 5.77373 7.78165 4.82979 8.796C3.88586 9.81036 3.35556 11.1861 3.35556 12.6206V30.6501C3.35556 32.0846 3.88586 33.4603 4.82979 34.4747C5.77373 35.4891 7.05398 36.0589 8.38891 36.0589H31.8779C33.2128 36.0589 34.4931 35.4891 35.437 34.4747C36.3809 33.4603 36.9112 32.0846 36.9112 30.6501V12.6206C36.9112 11.1861 36.3809 9.81036 35.437 8.796C34.4931 7.78165 33.2128 7.21179 31.8779 7.21179V7.21179ZM30.7538 10.8177L20.1334 19.3817L9.51302 10.8177H30.7538ZM31.8779 32.453H8.38891C7.94393 32.453 7.51718 32.2631 7.20254 31.9249C6.88789 31.5868 6.71113 31.1282 6.71113 30.6501V13.0714L19.1267 23.0777C19.4171 23.3118 19.7704 23.4383 20.1334 23.4383C20.4964 23.4383 20.8496 23.3118 21.1401 23.0777L33.5557 13.0714V30.6501C33.5557 31.1282 33.3789 31.5868 33.0642 31.9249C32.7496 32.2631 32.3229 32.453 31.8779 32.453Z" fill="white"/>
                            </svg> 
                            <span class="ml-3"><?php echo e($candidato_solicitud->email); ?></span>
                        </div>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="<?php echo e(route('candidatos.show', ['id' => $candidato_solicitud->id])); ?>" class="btn-principal text-white font-bold cursor-pointer">Ver perfil</a>
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </section>
        


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/ofertas_empleo/solicitudes.blade.php ENDPATH**/ ?>