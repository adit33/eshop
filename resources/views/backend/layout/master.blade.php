
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
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
      <h3 class="ui header">@yield('title')</h3>
      
      @yield('content')
    </div>
  </div>

</div>
</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/components.js') }}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

@stack('scripts')  

<script type="text/javascript">
    $('.ui.sidebar').sidebar({
    context: $('.bottom.segment')
    })
  .sidebar('attach events', '#sidebar');
   
</script>

</body>

</html>