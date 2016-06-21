@extends('layout.main')



@section('content')
	<table>
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Options</th>
		</thead>
		<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{link_to_route('user.edit', 'edit', $user->id)}}</td>
				{{Form::modeL($user, array('route'=>['user.destroy', $user->id ], 'method'=>'DELETE'))}}
				<td>
					{{Form::submit('Delete' )}}
				</td>
				{{Form::close()}}
			</tr>
		@endforeach
		</tbody>
	</table>


@stop