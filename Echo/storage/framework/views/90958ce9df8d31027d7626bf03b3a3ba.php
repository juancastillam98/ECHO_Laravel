
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto px-2 bg-color-fondo-300 color-texto-blanco">
        <h1 class="text-4xl font-extrabold my-3">Añadir nueva empresa</h1>
        <div class="mt-16">
            <form action="<?php echo e(route('empresas.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">

                    <div class="grid md:grid-cols-2 md:gap-6">
                         <div class="relative z-0 w-full mb-6 group">
                            <label for="nombre" class="text-lg">Razón Social</label>
                            <input type="text" name="nombre" id="nombre" class="mt-3 block py-2.5 px-0 p-0.5 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="direccion" class="text-lg">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="mt-3 block py-2.5 px-0 p-0.5 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="C/, Avda Azoría" required />
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <label for="descripcion" class="text-lg block mb-2 font-medium text-gray-900 dark:text-white">Descripcion</label>
                        <textarea id="descripcion" rows="4" class="mt-3 block p-2.5 w-full  text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe de que se dedica su empresa..."></textarea>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6 pb-5">
                        <div class="relative z-0 w-full mb-6 group">           
                            <label for="cif" class="text-lg">Cif:</label>
                            <input type="text" name="cif" id="cif" class="mt-3 block py-2.5 px-0 p-0.5 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />              
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="web" class="text-lg">Sitio web</label>
                            <input type="url" name="web" id="web" class="mt-3 block py-2.5 px-0 p-0.5 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 pee" placeholder="https://..." required />
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="telefono" class="text-lg">Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="mt-3 block py-2.5 px-0 p-0.5 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="+34 123 123" required />
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="empleados" class="text-lg">Empleados</label>
                            <input type="text" name="empleados" id="empleados" class="mt-3 block py-2.5 px-0 p-0.5 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="10, 20..." required />
                        </div>
                    </div>

                    <div class="flex pr-2">
                        <button class="btn-principal font-bold cursor-pointer flex items-center" type="submit">Enviar</button>
                        <button type="reset" class="pl-4 cursor-pointer" value="Restablecer" name="Restablecer"/>Reset</button>
                    </div>
                    
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/empresas/create.blade.php ENDPATH**/ ?>