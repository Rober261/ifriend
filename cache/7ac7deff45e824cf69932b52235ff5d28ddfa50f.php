<?php $__env->startSection('title','Listado de usuarios'); ?>
<?php $__env->startSection('content'); ?>
<a href="/user/create" class="btn btn-warning">Crear Usuario</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($user->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->password); ?></td>
      <td><a href="/user/<?php echo e($user->id); ?>" class="btn btn-success">Mostrar Usuario</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>