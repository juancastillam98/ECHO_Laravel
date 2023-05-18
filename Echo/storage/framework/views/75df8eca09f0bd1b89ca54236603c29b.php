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
        <h1>Listado de Puestos</h1>
        <a href="<?php echo e(route("puestos.create")); ?>" class=" btn btn-primary">Añadir un nuevo puesto</a>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acción</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($puesto ->nombre); ?></td>
                        <td><?php echo e($puesto ->descripcion); ?></td>
                        <td> 
                            <form action="<?php echo e(route('puestos.show', ['puesto'=>$puesto->id])); ?>" method="get">
                                <button class="btn btn-primary" type="submit">Ver</button>
                            </form>
                        </td>
                        <td> 
                            <form action="<?php echo e(route('puestos.destroy', ['puesto'=>$puesto->id])); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo e(method_field("DELETE")); ?>

                                <button class="btn btn-danger" type="submit">Borrar</button>
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
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/puestos/index.blade.php ENDPATH**/ ?>