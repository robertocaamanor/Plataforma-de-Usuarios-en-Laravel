@extends('admin.plantilla.main')

@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar Usuario</a><hr>
	<table class="table table-striped">
 		<thead>
 			<th>ID</th>
 			<th>Nombre</th>
 			<th>Correo electrónico</th>
 			<th>Accion</th>
 		</thead>
 		<tbody>
 			@foreach($users as $user)
 				<tr>
 					<td>{{  $user->id }}</td>
 					<td>{{  $user->name }}</td>
 					<td>{{  $user->email }}</td>
 					<td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a> <a href="{{ route('admin.users.destroy', $user->id) }}" on-click="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span></a></td>
 				</tr>
 			@endforeach
 		</tbody>
	</table>
	{!! $users->render() !!}
@endsection