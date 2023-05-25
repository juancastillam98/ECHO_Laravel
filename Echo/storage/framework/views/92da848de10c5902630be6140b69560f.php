<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php
        function hasConnection(){
            exec("ping -c 1 google.com", $output, $result);
            return ($result===0) ? TRUE : FALSE;
        }


        $current_user =Auth::user()->id;
        //echo "<br/> ".$current_user." - ". gettype($current_user)." <br/>";
    ?>
    <?php $__env->slot('header', null, []); ?> 
        <h1 class="text-4xl font-extrabold my-3">Listado de ofertas de empleo dashboad</h1>
     <?php $__env->endSlot(); ?>
        <div class="menu-vertical">
            <aside>Sidebar</aside>
            <section>
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
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ofertas_empleo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oferta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($oferta ->puesto->nombre); ?></td>
                                <td><?php echo e($oferta ->empresa->nombre); ?></td>
                                <td><?php echo e($oferta ->numpuestos); ?></td>
                                <td><?php echo e($oferta ->fecha_publicacion); ?></td>
                                <td><?php echo e($oferta ->fecha_cierre); ?></td>
                                <td><?php echo e($oferta ->requisitos); ?></td>
                                <td><?php echo e($oferta ->salario); ?></td>
                                <td> 
                                    <form action="<?php echo e(route('solicitudes.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="oferta_id" value="<?php echo e($oferta ->id); ?>">
                                        <button class="btn btn-primary" type="submit">Solicitar</button>
                                    </form>
                                </td>
                            </tr>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </section>
        </div>
        
        <footer>Footer</footer>

    

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/home.blade.php ENDPATH**/ ?>