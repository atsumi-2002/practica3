<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Calzados</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tabis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(url('calzado')); ?>">Calzados</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('ventas')); ?>">Ventas</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    <?php if(Session::has('mensaje')): ?>
        <?php echo e(Session::get('mensaje')); ?>

    <?php endif; ?>
<div id="table">
    <br><br>
    <h1>
        Calzados
    </h1>
    <br><br>
    <table class="table table-info table-striped" width="60" id="tableCalzado">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Calzado</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Color</th>
                <th class="text-center">Talla</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Genero</th>
                <th class="text-center">Edades</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $calzados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calzado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($calzado->id); ?></td>
                    <td class="text-center"><?php echo e($calzado->calzado); ?></td>
                    <td class="text-center"><?php echo e($calzado->tipo); ?></td>
                    <td class="text-center"><?php echo e($calzado->color); ?></td>
                    <td class="text-center"><?php echo e($calzado->talla); ?></td>
                    <td class="text-center"><?php echo e($calzado->marca); ?></td>
                    <td class="text-center"><?php echo e($calzado->genero); ?></td>
                    <td class="text-center"><?php echo e($calzado->edad); ?></td>
                    <td>
                    
                    <button type="button" class="btn btn-warning"><a href="<?php echo e(url('/calzado/'.$calzado->id.'/edit')); ?>">Editar</a></button>
                    <form action="<?php echo e(url('/calzado/'.$calzado->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                    </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <button type="button" id="button" class="btn btn-primary"><a href="<?php echo e(url('calzado/create')); ?>">Registrar calzado</a></button>
    
</div>
    
</body>
</html>

<?php /**PATH D:\xampp\htdocs\practica3\resources\views/calzado/index.blade.php ENDPATH**/ ?>