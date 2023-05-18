<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
</head>
<body>
    <h1>Listado de empresas</h1>
    <a href="<?php echo e(route('empresas.create')); ?>">Nueva empresa</a>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Operación</th>
            <th></th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($empresa->nombre); ?></td>
                    <td><?php echo e($empresa->telefono); ?></td>
                    <td><?php echo e($empresa->email); ?></td>
                    <td><?php echo e($empresa->direccion); ?></td>
                      <td> 
                        <form action="<?php echo e(route('empresas.show', ['empresa'=>$empresa->id])); ?>" method="get">
                            <button class="btn btn-primary" type="submit">Ver</button>
                        </form>
                    </td>
                    <td> 
                        <form action="<?php echo e(route('empresas.destroy', ['empresa'=>$empresa->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field("DELETE")); ?>

                            <button class="btn btn-danger" type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
   
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/empresas/index.blade.php ENDPATH**/ ?>