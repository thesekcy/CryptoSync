

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.css') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body onload="window.print();">  @section('content')
    <section class="invoice">
      <h2 class="page-header">
          <i class="fa fa-globe"></i> AdminLTE, Inc.
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
    </section>
</body>
</html>



