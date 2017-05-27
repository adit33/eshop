<?php $__env->startSection('content'); ?>
<h1>Create User</h1>

<?php echo e(Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form'])); ?>

  <?php echo $__env->make('backend.user._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo e(Form::submit('Submit',['class'=>'ui button'])); ?>

<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>