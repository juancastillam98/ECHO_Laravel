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
        <h1>Oferta Empleo <?php echo e($puesto_id->id); ?></h1>

        <?php dump($oferta_solicitudes); ?>
                                    <table>
                                    <thead>
                                        <tr>
                                            <th>Puesto</th>
                                            <th>Ofertas</th>
                                            <th>Total Solicitudes</th>
                                            <th>Ver</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $oferta_solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitudes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($solicitudes ->puesto); ?></td>
                                                <td><?php echo e($solicitudes ->oferta); ?></td>
                                                <td><?php echo e($solicitudes ->total_solicitudes); ?></td>     

                                                           

                                                <td>
                                                    <form action="<?php echo e(route('ofertas_empleo.list_users_information', [
                                                        'oferta_id'=>$solicitudes->id_oferta,
                                                        'puesto_id'=>$puesto_id->id, 
                                                        'empresa_id'=>$empresa_id->id
                                                        ])); ?>" method="get">
                                                        <button class="btn btn-primary" type="submit">Ver Más</button>
                                                    </form> 
                                                 
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/ofertas_empleo/show.blade.php ENDPATH**/ ?>