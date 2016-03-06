@extends('admin.plantilla.main')

@section('title', 'Editar usuario '.$user->name)

@section('content')
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre completo']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Correo electronico') !!}
		{!! Form::text('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'example@gmail.com']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
@endsection