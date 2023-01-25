<?php $__env->startSection('title','Detalle de '. $user->name); ?>
<?php $__env->startSection('content'); ?>
    <h2><?php echo e($user->password); ?></h2>
    
    <div class="row">
        <a href="/user/<?php echo e($user->id); ?>/edit" class="btn btn-secondary"> Editar</a>
        <form action="/user/<?php echo e($user->id); ?>" method="POST">
        <input type="hidden" name="_METHOD" value="DELETE">
        <input type="submit" value="Borrar" class="btn btn-primary mt-2">
    </form>
        <a href="/user" class="btn btn-primary mt-2"> Listado de usuarios</a>    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>