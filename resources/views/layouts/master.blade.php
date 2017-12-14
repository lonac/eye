<html>
<head>
    <title> @yield('title') </title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">


    <style type="text/css">
       .search-background img {
         width: 100%;
        }
        .well-searchbox {
          min-height: 20px;
          min-width: 400px;
          color: #e3e3e3;
          padding: 19px;
          position: absolute;
          z-index: 80;
          top: 420px;
          right: 400;
          left: 300px;
          background: rgba(0, 0, 0, 0.6);
          margin-bottom: 20px;
          border: 1px solid #e3e3e3;
          border-radius: 30px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        }

        .well-searchbox label {
            color: #fff;
}
        </style>

</head>
<body>

    @include('layouts.navbar')

    <div class="container">
       @include('errors.list')
    </div>

    @yield('content')

    <footer class="row">
        {{--@include('layouts.footer')--}}
    </footer>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>

</body>

</html>