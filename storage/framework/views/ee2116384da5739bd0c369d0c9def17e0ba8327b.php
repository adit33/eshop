
<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.semanticui.min.css"> -->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
<div id="app">
  <div id="sidebar" class="ui top attached demo menu">
  <a class="item">
    <i class="sidebar icon"></i> Menu
  </a>
</div>
<div class="ui bottom attached segment">
  <div class="ui inverted labeled icon left inline vertical demo sidebar menu">
    <a class="item">
      <i class="home icon"></i> Home
    </a>
    <a class="item">
      <i class="block layout icon"></i> Topics
    </a>
    <a class="item">
      <i class="smile icon"></i> Friends
    </a>
    <a class="item">
      <i class="calendar icon"></i> History
    </a>
  </div>

  <div class="pusher">
    <div class="ui basic segment">
      <h3 class="ui header"><?php echo $__env->yieldContent('title'); ?></h3>
      
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>

</div>
</div>
<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/components.js')); ?>"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('vendor/datatables/buttons.server-side.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>  

<script type="text/javascript">
    $('.ui.sidebar').sidebar({
    context: $('.bottom.segment')
    })
  .sidebar('attach events', '#sidebar');
   
</script>

</body>

</html>