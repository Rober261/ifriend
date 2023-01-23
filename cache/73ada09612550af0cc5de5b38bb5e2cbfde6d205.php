<?php $__env->startSection('title','Bievenido a Ifriend'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Tu gestor del amigo invisible</h2>
    <a href="/user" class="btn btn-primary"> Listado de usuarios</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>