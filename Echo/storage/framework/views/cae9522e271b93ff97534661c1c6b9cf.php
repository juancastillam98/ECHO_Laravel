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
        <h1 class="text-4xl font-extrabold my-3">Listado de ofertas de empleo dashboad</h1>
     <?php $__env->endSlot(); ?>

     <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search')->html();
} elseif ($_instance->childHasBeenRendered('3M2tPaY')) {
    $componentId = $_instance->getRenderedChildComponentId('3M2tPaY');
    $componentTag = $_instance->getRenderedChildComponentTagName('3M2tPaY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3M2tPaY');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('3M2tPaY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

    <footer>Footer</footer>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/dashboard.blade.php ENDPATH**/ ?>