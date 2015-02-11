@extends('app')
@section('content')
<h2>Edit:{{ $articles->title }}</h2>
{!! Form::model($articles,['method'=>'PATCH','action'=>['ArticlesController@update',$articles->id]]) !!}
<div class='form-group'>
       {!! Form::label('title','Title') !!}
       {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class='form-group'>

       {!! Form::label('body','Body:') !!}
		{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>

       {!! Form::label('published_at','Published At:') !!}
		{!! Form::text('published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
<div class='form-group'>

       
	   {!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
</div>


{!! Form::close() !!}
@if ($errors->any())
<ul class='alert alert-danger'>
	@foreach ($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
@endif




@stop