<style type="text/css">
	.ui.blue.inverted.menu{
		border-radius: 0;
	}
</style>
<?php $__env->startSection('content'); ?>

<div class="ui blue three item inverted menu">
  <a class="active item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item">
    Friends
  </a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>