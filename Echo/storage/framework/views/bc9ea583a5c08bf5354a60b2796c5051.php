<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
    <h1>Información de <?php echo e($empresa ->nombre); ?></h1>
    <p>Nombre: <?php echo e($empresa ->nombre); ?></p>
    <p>Telefono: <?php echo e($empresa ->telefono); ?></p>
    <p>Email: <?php echo e($empresa ->email); ?></p>
    <p>Dirección: <?php echo e($empresa ->direccion); ?></p>

  <h2>Ofertas de empleo</h2>
    <table>
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $empresa -> oferta_empleo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ofertas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($ofertas -> descripcion); ?></td>
        </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

<form action="<?php echo e(route('empresas.edit', ['empresa'=>$empresa->id])); ?>" method="GET">
    <button class="btn btn-primary" type="submit">Editar</button>
 </form>  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/PROYECTO_Final_Echo/Laravel/Echo/resources/views/empresas/show.blade.php ENDPATH**/ ?>