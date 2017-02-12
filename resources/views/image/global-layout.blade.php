<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IMPLEMENT CRUD FOR IMAGES</title>
    

      <meta httpequiv="XUACompatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
      <link rel="stylesheet" href="/assets/css/style.css">
<!-- bootstrap -->
<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/bootstrap/js/jquery-3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="/assets/bootstrap/js/material.js"></script>
    <script src="/assets/bootstrap/js/ripples.js"></script>
    
    <script src="/assets/bootstrap/js/ripples.js"></script>

    <!-- zoom in gambar-->
<link rel="stylesheet" href="/assets/bootstrap/zoom/css/animate.css">
   <!-- Icomoon Icon Fonts-->
   <link rel="stylesheet" href="/assets/bootstrap/zoom/css/icomoon.css">
   <!-- Magnific Popup -->
   <link rel="stylesheet" href="/assets/bootstrap/zoom/css/magnific-popup.css">
   <!-- Salvattore -->
   <link rel="stylesheet" href="/assets/bootstrap/zoom/css/salvattore.css">
   <!-- Theme Style -->
   <link rel="stylesheet" href="/assets/bootstrap/zoom/css/style.css">
   <!-- Modernizr JS -->
   <script src="/assets/bootstrap/zoom/js/modernizr-2.6.2.min.js"></script>
  <!-- -->
</head>

<body>
 <h1 class="text-center">IMPLEMENT CRUD FOR IMAGES</h1>
  <div id="body">
            @yield('body')
         </div>

<!-- zoom in gambar -->
<script src="/assets/bootstrap/zoom/js/jquery.min.js"></script>
   <!-- jQuery Easing -->
   <script src="/assets/bootstrap/zoom/js/jquery.easing.1.3.js"></script>
   <!-- Bootstrap -->
   <script src="/assets/bootstrap/zoom/js/bootstrap.min.js"></script>
   <!-- Waypoints -->
   <script src="/assets/bootstrap/zoom/js/jquery.waypoints.min.js"></script>
   <!-- Magnific Popup -->
   <script src="/assets/bootstrap/zoom/js/jquery.magnific-popup.min.js"></script>
   <!-- Salvattore -->
   <script src="/assets/bootstrap/zoom/js/salvattore.min.js"></script>
   <!-- Main JS -->
   <script src="/assets/bootstrap/zoom/js/main.js"></script>
<!-- -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://masonry.desandro.com/masonry.pkgd.js'></script>
<script src='http://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script>

   <script src="assets/js/index.js"></script>   
   <script>
      $.material.init();
    </script>
<script>
$('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  // use element for option
  columnWidth: '.grid-sizer',
  percentPosition: true
})
</script>
</body>
</html>
