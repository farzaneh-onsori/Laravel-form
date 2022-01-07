

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('layouts.header')

  <!-- Page Content -->
  <div class="container">


    <!-- /.row -->
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @yield('content')
        </div>

        <!-- Sidebar Widgets Column -->

        <div class="col-md-4">
            @section('sidebar')
                @include('layouts.sidebar')
            @show

        </div>
      </div>



  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('layouts.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


{{-- <!DOCTYPE html>
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
</html> --}}
