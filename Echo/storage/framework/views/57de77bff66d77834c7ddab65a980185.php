<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/bases.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="font-sans antialiased color-texto-blanco">
        <div class="min-h-screen bg-color-fondo-300 ">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-color-fondo-300 shadow">
                    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 2xl:px-36">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main class="bg-color-fondo-300 mx-auto py-6 px-4 sm:px-6 lg:px-8 xl:px-10 2xl:px-10">
                <?php echo e($slot); ?>

            </main>
        </div>
        <script src="<?php echo e(asset('js/profile.js')); ?>"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/layouts/app.blade.php ENDPATH**/ ?>