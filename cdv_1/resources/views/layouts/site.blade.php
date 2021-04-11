<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CDV - @yield('title')</title>
</head>
<body>
  @section('sidebar')
    To jest główny pasek boczny.
    @show
  <div class="container">
    @yield('content')
  </div>
</body>
</html>