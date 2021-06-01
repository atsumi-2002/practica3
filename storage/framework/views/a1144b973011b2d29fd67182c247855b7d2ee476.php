<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Registrar</title>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tabis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo e(url('calzado')); ?>">Calzados</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="<?php echo e(url('ventas')); ?>">Ventas</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<div id="table">
    <br><br>
    <h1>
        Registrar venta
    </h1>
    <br><br>
    <form action="<?php echo e(url('/ventas')); ?>" id="form" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="Calzado"> Nombre del calzado </label>
            <input type="text" class="form-control" name="Calzado" id="Calzado">
            <br>
        </div>
        <div class="form-group">
            <label for="Fec_compra"> Fecha de compra </label>
            <input type="text" class="form-control" name="Fec_compra" placeholder="dd/mm/aaaa" id="Fec_compra">
            <br>
        </div>
        <div class="form-group">
            <label for="Tipo_pago"> Tipo de pago </label>
            <select name="Tipo_pago" class="form-control" id="Tipo_pago">
                <option value="efectivo">efectivo</option> 
                <option value="tarjeta">tarjeta</option> 
            </select>
            <br>
        </div>
        <div class="form-group">
            <label for="Monto"> Monto </label>
            <input type="number" class="form-control" name="Monto" id="Monto">
            <br>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="Guardar datos">
            <br>
        </div>
    </form>
</div>
</body>
</html><?php /**PATH D:\xampp\htdocs\practica3\resources\views/ventas/create.blade.php ENDPATH**/ ?>