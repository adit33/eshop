<?php $__env->startSection('content'); ?>
<h1>Create User</h1>

<?php echo e(Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form'])); ?>


	<?php if($errors->any()): ?>

	<div class="ui negative message">
	  <i class="close icon"></i>
	  <div class="header">
	    There were some errors with your submission
	  </div>
	  <ul class="list">
	    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </ul>
	</div>
	<?php endif; ?>

  <?php echo $__env->make('backend.user._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo e(Form::submit('Submit',['class'=>'ui button'])); ?>

<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
	$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>