<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>roocket - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
   <header>
       <p>This is my header</p>
   </header>

   <div id="main">
     @yield('content')
   </div>

   <footer>
       <p>This is my footer</p>
   </footer>
   <script src= "/js/script.js"></script>
</body>
</html>