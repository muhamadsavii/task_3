@extends('image/global-layout')

@section('body')
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
<style type="text/css">
     .thumbnail{
      margin-bottom: 0px;
     }
     img {
    transition: -webkit-transform 0.25s ease;
    transition: transform 0.25s ease;
}

img:active {
    -webkit-transform: scale(2);
    transform: scale(2);
    z-index: 999999;
}
  </style>


<div class="grid">
@forelse($images as $image)
  <div class="grid-sizer"></div>
  
  
  <div class="col-md-3">

  <div class="thumbnail">
    <img  src="{{asset($image->file)}}" />
    
    <div class="caption">
                  <h3 style="text-align: center" class="text-center">{{$image->caption}}</h3>
                  <p>{!! substr($image->description, 0,100) !!}</p>
                  <p>
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
                  </p>
               </div>
    </div>
  </div>
</div>
   @empty



   <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
      @endforelse
</div>
@stop