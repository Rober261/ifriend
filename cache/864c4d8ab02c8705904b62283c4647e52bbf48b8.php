<?php $__env->startSection('title','Listado de usuarios'); ?>
<?php $__env->startSection('content'); ?>
<a href="/party/create" class="btn btn-warning">Crear Partida</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Propietario</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($party->id); ?></th>
      <td><?php echo e($party->name); ?></td>
      <td><?php echo e($party->admin_id); ?></td>
      <td><a href="/party/<?php echo e($party->id); ?>" class="btn btn-success">Mostrar</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>