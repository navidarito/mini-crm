<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Mini-CRM</title>
  </head>
  <body>
    @include('layouts.nav')
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
    <br>
    @yield('content')

    
  </body>
</html>
