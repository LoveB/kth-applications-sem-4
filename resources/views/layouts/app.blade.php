<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

       <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

         <!-- Reset-->
         <link href="css/reset.css" rel="stylesheet">

         <link href="{{ asset('css/app.css') }}" rel="stylesheet">

         <!-- Responsive grid-->
         <link rel="stylesheet" href="css/responsive_grid/html5reset.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/col.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/2cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/3cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/4cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/5cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/6cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/7cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/8cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/9cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/10cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/11cols.css" media="all">
         <link rel="stylesheet" href="css/responsive_grid/12cols.css" media="all">
 
         <!-- Font awesome-->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
 
         <link rel="stylesheet" href="css/animate.css" media="all">
 
         <!-- Flat icon-->
         <link rel="stylesheet" href="css/my-icons-collection/font/flaticon.css" media="all">
 
         <!-- Custom styles for this template -->
         <link href="css/custom.css" rel="stylesheet">
         <link href="css/small-screen.css" rel="stylesheet">
 
         <!-- Fonts-->
         <!-- Google font-->
         <link href="css/fonts.css" rel="stylesheet">
    </head>


    <body>

        <div id="app">
        @include('inc.navbar')
        @yield('content')
        </div>
        
    <!-- Footer -->
    <footer class="footer">
        <div class="text-box-footer">
            <h3>Follow us:</h3>
            <div class="flaticon-instagram"></div>
            <div class="flaticon-facebook"></div>
        </div>
    </footer>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/main.js"></script>

</body>
</html>