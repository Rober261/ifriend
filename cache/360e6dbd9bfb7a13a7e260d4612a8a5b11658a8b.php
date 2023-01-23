<?php $__env->startSection('title','Detalle de '. $user->name); ?>
<?php $__env->startSection('content'); ?>
    <h2><?php echo e($user->password); ?></h2>
    <a href="/user" class="btn btn-primary"> Listado de usuarios</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>