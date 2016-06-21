@extends('layout.main')


@section('content')

	{{Form::open(array('route'=>['user.store']))}}
	<div>
		
		{{Form::label('name' , 'Name')}}
		{{Form::text('name')}}

	</div>
	<div>
		{{Form::label('email' , 'Email')}}
		{{Form::text('email')}}

	</div>
	<div>
		{{form::submit('Add')}}
	</div>

	{{Form::close()}}





@stop