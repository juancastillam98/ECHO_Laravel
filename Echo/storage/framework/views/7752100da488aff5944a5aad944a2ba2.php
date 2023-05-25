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
        <h1 class="text-4xl font-extrabold my-3">Listado de las ofertas de empleo</h1>
     <?php $__env->endSlot(); ?>
    
        <div class="container mx-auto px-2 bg-color-fondo-300 color-texto-blanco mt-8">   
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left color-texto-blanco bg-color-fondo-200">
                    <thead class="bg-color-principal text-sm uppercase">
                        <tr>
                            <th scope="col" class="px-5 py-3">
                                Puesto
                            </th>
                            <th scope="col" class="px-5 py-3">
                                Ofertas
                            </th>
                            <th scope="col" class="px-5 py-3">
                                Total Solicitudes
                            </th>
                            <th scope="col" class="px-3 py-3">
                                <span class="sr-only ">Ver</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $oferta_solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitudes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" border-b border-gray-700 hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-bold whitespace-nowrap color-texto-blanco">
                                    <?php echo e($solicitudes ->puesto); ?>

                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e($solicitudes ->oferta); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <?php echo e($solicitudes ->total_solicitudes); ?>

                                </td>
                                <td class="px-2 text-center">
                                    <form action="<?php echo e(route('ofertas_empleo.list_users_information', [
                                        'oferta_id'=>$solicitudes->id_oferta,
                                        'puesto_id'=>$puesto_id->id, 
                                        'empresa_id'=>$empresa_id->id
                                        ])); ?>" method="get">
                                        <button class="btn-principal font-bold cursor-pointer" type="submit">Ver Más</button>
                                    </form> 
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
   
    
                            
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/ofertas_empleo/show.blade.php ENDPATH**/ ?>