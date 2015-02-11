@extends('app')

@section('content')
	<h3>{{$articles->title}}</h3>
	
		
		<article>
			
			<div> {{$articles->body}}</div>

		</article>
	
	

    
@stop