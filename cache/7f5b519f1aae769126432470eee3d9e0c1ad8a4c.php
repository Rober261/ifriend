<?php $__env->startSection('title','Partida con id: '); ?>
<?php $__env->startSection('content'); ?>
    <h2>Asignación de regalos</h2>
    
    <div class="row">
      
      <h6>Id usuarios</h6>  
      <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <h1>        
             <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
               if ($party->user_from === $user->id) {
                 echo  $user->name ;
               }
               ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               -> 
               <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php
               if ($party->user_to === $user->id) {
                 echo  $user->name;
               }
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

          </h1>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="/party" class="btn btn-primary mt-2"> Volver Atras</a>    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>