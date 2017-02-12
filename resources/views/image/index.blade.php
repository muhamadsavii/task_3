
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hydrogen &mdash; A free HTML5 Template by FREEHTML5.CO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Salvattore -->
  <link rel="stylesheet" href="css/salvattore.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div id="fh5co-offcanvass">
   
    <h1 class="fh5co-logo"><a class="navbar-brand" href="index.html">Implement CRUD for Images</a></h1>
    <ul>
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="pricing.html">Pricing</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <h3 class="fh5co-lead">Connect with us</h3>
    <p class="fh5co-social-icons">
      <a href="#"><i class="icon-twitter"></i></a>
      <a href="#"><i class="icon-facebook"></i></a>
      <a href="#"><i class="icon-instagram"></i></a>
      <a href="#"><i class="icon-dribbble"></i></a>
      <a href="#"><i class="icon-youtube"></i></a>
    </p>
  </div>
  <header id="fh5co-header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <a class="navbar-brand" style = "width:450px" href="#">Implement CRUD for Images</a>    
        </div>
      </div>
    </div>
  </header>
  <!-- END .header -->
  
  @include('/image/error-notification')
   @if(count($images) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
               Add New Image
            </a>
            <hr />
             
         </div>
        </br></br>
      @endif
  <div id="fh5co-main">
    <div class="container">

      <div class="row">

        <div id="fh5co-board" data-columns>
            @forelse($images as $image)

          <div class="item">
            <div class="animate-box">
              <a href="{{asset($image->file)}}" class="image-popup fh5co-board-img" title="{{$image->caption}}"><img src="{{asset($image->file)}}" alt="Free HTML5 Bootstrap template"></a>
            </div>
            <div class="fh5co-desc"><h3 style="text-align: center" class="text-center">{{$image->caption}}</h3><br>
<div class="row text-center" style="padding-left:1em;">
                      <div class="col-md-12 col-md-offset-0">
                     <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'/image/'.$image->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     </div>
                     </div>















                  </div>
          </div>
         @empty



   <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
      @endforelse
          
        </div>
        </div>
       </div>
  </div>

  


  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Salvattore -->
  <script src="js/salvattore.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>

  

  
  </body>
</html>
