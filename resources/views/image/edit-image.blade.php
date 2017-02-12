@extends('image/global-layout')
@section('body')

<div class="row" style="margin-top: 10px">
   <div class="col-md-2 col-md-offset-5">
   {!! Form::model($image,['url' => '/image/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}

      <img src="{{ asset($image->file) }}" height="150" />
      <div class="form-group">
         <label for="userfile">Image File</label>
         {!! Form::file('userfile',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="caption">Caption</label>
         {!! Form::text('caption',null,['class'=>'form-control']) !!}
      </div>

      

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
   </div>
</div>
@stop