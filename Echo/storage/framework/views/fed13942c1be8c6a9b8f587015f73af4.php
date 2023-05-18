<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
</head>
<body>
    <h1>Listado de ofertas de empleo</h1>
    <table>
        <thead>
            <tr>
                <th>Puesto ID</th>
                <th>Empresa ID</th>
                <th>Vacantes</th>
                <th>Fecha Publicación</th>
                <th>Fecha Expiración</th>
                <th>Descripción</th>
                <th>Requisitos</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ofertas_empleo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oferta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($oferta ->puesto_id); ?></td>
                    <td><?php echo e($oferta ->empresa_id); ?></td>
                    <td><?php echo e($oferta ->numpuestos); ?></td>
                    <td><?php echo e($oferta ->fecha_publicacion); ?></td>
                    <td><?php echo e($oferta ->fecha_cierre); ?></td>
                    <td><?php echo e($oferta ->descripcion); ?></td>
                    <td><?php echo e($oferta ->requisitos); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table> 
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/ofertas_empleo/index.blade.php ENDPATH**/ ?>