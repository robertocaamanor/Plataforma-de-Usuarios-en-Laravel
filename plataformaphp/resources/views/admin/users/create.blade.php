@extends('admin.plantilla.main')

@section('title', 'Crear usuario')

@section('content')
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre completo']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Correo electronico') !!}
		{!! Form::text('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'example@gmail.com']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '*****************']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
@endsection