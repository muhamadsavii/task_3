
@extends('image/global-layout')
@section('body')

   @include('image/error-notification')
   <div class="row" style="margin-top: 10px">
   <div class="col-md-2 col-md-offset-5">
   {!! Form::open(['url'=>'/image', 'method'=>'POST', 'files'=>'true']) !!}
   
      <div class="form-group">
         <label for="userfile">Image File</label>
         <input type="file" class="form-control" name="userfile">
      </div>

      <div class="form-group">
         <label for="caption">Caption</label>
         <style> .form-control{padding: 0px;
            }</style>
         <input type="text" class="form-control" style="" name="caption" value="">
      </div>

      

      <button type="submit" class="btn btn-primary">Upload</button>
      <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
   </div>
   </div>
@stop