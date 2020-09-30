<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Event Brote</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="../../css/app.css">
</head>
<body class="p-4">
     <div class="container mb-3">

          @if(Session::has('notification.message'))
               <div class="alert alert-{{ Session::get('notification.type') }}" role="alert">
                    <strong>{!! Session::get('notification.message') !!}</strong>
               </div>
          @endif

          @yield('content')
          
     </div>
</body>
</html>