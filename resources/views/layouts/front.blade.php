<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

  @include('includes.header')
  

  <div class="flex">
    <div class="flex-1 bg-ping bg-repeat-y bg-cover bg-contain" style="background-image: url({{asset('img/RECETTE.png')}}) ">
</div>
    <div class="w-10/12 flex-none bg-green-light">
      @yield('content')

    </div>
    <div class="flex-1 bg-ping bg-repeat-y bg-cover bg-contain" style="background-image: url({{asset('img/recette2.png')}}) ">
    </div>
</div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>