<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
<body>
<?php echo $__env->yieldContent('content'); ?>
</body>
<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</html>