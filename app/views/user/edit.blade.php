@extends('layout.main')

@section('content')
	{{Form::model($users, array('route'=>['user.update', $users->id], 'method'=>'PUT') )}}
	<div>
		
		{{Form::label('name' , 'Name')}}
		{{Form::text('name')}}

	</div>
	<div>
		{{Form::label('email' , 'Email')}}
		{{Form::text('email')}}

	</div>
	<div>
		{{form::submit('Update')}}
	</div>

	{{Form::close()}}



@stop