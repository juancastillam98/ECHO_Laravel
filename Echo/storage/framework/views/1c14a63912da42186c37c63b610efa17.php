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
        <div class="container">
            <!--El token <?php echo csrf_field(); ?> es para proteger la información, el action route('videojuegos.store') es porque store es para insertar en la -->
            <form action="<?php echo e(route('puestos.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group my-2">
                            <label class="form-label" for="nombre">Nombre del puesto</label>
                            <input class="form-control" type="text" name="nombre" id="nombre">
                        </div>
                        <div class="form-group my-2">
                            <label class="form-label" for="descripcion">Descripción </label>
                            <textarea class="form-control" type="text" name="descripcion" id="descripcion"></textarea>
                        </div>
            
                        <div class="d-inline">
                            <button class="btn btn-primary" type="submit" name="btnAnadir">Añadir</button>
                        </div>
                        <div class="d-inline">
                            <a class="btn btn-secondary my-5" href="./">Volver nuevo</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/puestos/create.blade.php ENDPATH**/ ?>