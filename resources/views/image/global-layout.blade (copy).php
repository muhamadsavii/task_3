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
    
</head>

<body>
  <h1 class="text-center">IMPLEMENT CRUD FOR IMAGES</h1>
  @if(count($images) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
               Add New Image
            </a>
            <hr />
            
         </div>
      @endif

<div class="grid">
  <div class="grid-sizer"></div>
  @forelse($images as $image)
  <div class="grid-item">
  <div class="thumbnail">
   
    <img  src="{{asset($image->file)}}" />
    <div class="caption">
                  <h3 style="text-align: center" class="text-center">{{$image->caption}}</h3>
                  <p>{!! substr($image->description, 0,100) !!}</p>
                  <p>
                     <div class="row text-center" style="padding-left:1em;">
                      <div class="col-md-6 col-md-offset-4">
                     <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'/image/'.$image->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     </div>
                     </div>
                  </p>
               </div>
    </div>
  </div>

   @empty
   <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
      @endforelse
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://masonry.desandro.com/masonry.pkgd.js'></script>
<script src='http://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script>

   <script src="assets/js/index.js"></script>   
   <script>
      $.material.init();
    </script>

</body>
</html>
