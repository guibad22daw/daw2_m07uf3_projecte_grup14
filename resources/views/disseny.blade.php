<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Gestió - Happy Flower Family Hotel</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <script src="{{ asset('js/app.js') }}" defer></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
   <div class="min-h-screen bg-gray-100">
      @include('layouts.navigation')
      @yield('content')
   </div>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
</body>

</html>