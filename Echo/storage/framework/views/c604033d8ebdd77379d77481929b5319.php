<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/welcome.css')); ?>">
    <!--Portada-->
    <section class="portada">
        <div class="portada-foto">

            <div id="info">
                <div class="info-text">
                    <h1 class="color-texto-blanco text-4xl font-extrabold my-3 mt-8 2xl:text-5xl" id="titulo-intro">Find Your Dream Developer Job Today</h1>
                    <h2 class="texto-white text-3xl 2xl:text-4xl">Discover opportunities, connect with top companies, and launch your
                        career asa developer</h2>
                </div>
            </div>
        </div>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/welcome.blade.php ENDPATH**/ ?>