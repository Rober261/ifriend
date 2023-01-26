<?php $__env->startSection('title','Partida con id: Mira la url'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Asignación de regalos</h2>
    
    <div class="row">  
      <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <h1><?php echo e($party->user_to); ?>-><?php echo e($party->user_from); ?></h1>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="/party" class="btn btn-primary mt-2"> Volver Atras</a>    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>