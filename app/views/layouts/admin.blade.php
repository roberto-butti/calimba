<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation 5</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="/foundation-5.2.0/css/normalize.css">
  <link rel="stylesheet" href="/foundation-5.2.0/css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="/css/app.css">

  <script src="/foundation-5.2.0/js/vendor/modernizr.js"></script>

</head>
<body>
  <div class="container">
  @include('blocks.menu')
  @include('blocks.title')
  @include('blocks.flashmessages')
<div class="row">
  <div class="large-12 columns">
  @yield('content')
  </div>
</div>




  </div> <!-- END OF CONTAINER -->


  <script src="/foundation-5.2.0/js/vendor/jquery.js"></script>
  <script src="/foundation-5.2.0/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>