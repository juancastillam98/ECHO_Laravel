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
        <?php
           $id_empresa= request()->route('id');
        ?>
        <form action="<?php echo e(route('ofertas_empleo.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                       
            
            <div class="grid gap-6 mb-6 md:grid-cols-2"> 
                
                <label for="puesto_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-white">Selecciona un puesto de trabajo</label>   
                <div>
                    <input list="listado_de_puestos" name="puesto_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ej. Desarrollador Web">
                </div>               
                <datalist id ="listado_de_puestos">
                    <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($puesto->nombre); ?>"></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </datalist>   
            </div>
            <label for="">Nota: <strong> Solose admiten los puestos seleccionados </strong></label>

            
            <input type="hidden" name="empresa_id" value="<?php echo e($id_empresa); ?>">

            
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="fecha_publicacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha publicación</label>
                    <input type="date" id="fecha_publicacion" name ="fecha_publicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                </div>
                <div>
                    <label for="fecha_cierre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                    <input type="date" id="fecha_cierre" name="fecha_cierre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe">
                </div>
            </div>
            
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div>
                    <label for="numpuestos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero puestos</label>
                    <input type="number" id="numpuestos" name="numpuestos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cuantos puestos se ofertan">
                </div>
                <div>
                    <label for="salario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario</label>
                    <input type="text" id="salario" name="salario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ej: 999.99">
                </div>
                <div>
                    <label for="underline_select" class="sr-only">Tipo Salario</label>
                    <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Tipo salario</option>
                        <option value="neto">Neto</option>
                        <option value="bruto">Bruto</option>
                    </select>
                </div>
            </div>   
            
            
            <div class="mb-6">
                <div>
                    <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                    <textarea id="descripcion" name="descripcion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe en que consiste esta oferta de trabajo..."></textarea>
                </div>
            </div>
            

             <div class="mb-6">
                <div>
                    <label for="requisitos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Requisitos</label>
                    <textarea id="requisitos" name="requisitos" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Especifica cuales son los requisitos para optar a esta solicitud"></textarea>
                </div>
             </div>               

            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>    
        </form>

     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/ofertas_empleo/create.blade.php ENDPATH**/ ?>