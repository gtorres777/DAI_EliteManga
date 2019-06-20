@extends('layouts.app')

@section('content')
    <div class="container">
	<div class="row card mt-5 text-white" style="background-color:rgba(31,31,31, 0.5)">
		<div class="col-12 col-sm-12 col-md-12 col-xl-12 pb-2">
			<h2 class="textbox">Nuevo Producto</h2>
	</div>
	<div class="row justify-content-center mt-3">
	@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{ $message }}</strong>
		</div>
		<object data="images/{{ Session::get('image') }}">
	@endif
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{action ('ProductoController@store')}}" method="POST" enctype="multipart/form-data" class="col-12">
	@csrf
		<div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Nombre_producto') }}</label>
			<div class="col-md-6">
				<input id="nombre_producto" type="text" class="bg-white text-dark form-control{{ $errors->has('nombre_producto') ? ' is-invalid' : '' }}" name="nombre_producto" value="{{ old('nombre_producto') }}" autofocus />
				@if ($errors->has('numero_capitulo'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('nombre_producto')}}</strong>
					</span>
				@endif
			</div>
        </div>
		<div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Caracteristicas') }}</label>
			<div class="col-md-6">
				<input id="caracteristicas" type="text" class="bg-white text-dark form-control{{ $errors->has('caracteristicas') ? ' is-invalid' : '' }}" name="caracteristicas" value="{{ old('caracteristicas') }}" autofocus />
				@if ($errors->has('caracteristicas'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('caracteristicas')}}</strong>
					</span>
				@endif
			</div>
		</div>
        <div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Precio') }}</label>
			<div class="col-md-6">
				<input id="precio" type="number" class="bg-white text-dark form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" name="precio" value="{{ old('precio') }}" autofocus />
				@if ($errors->has('precio'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('precio')}}</strong>
					</span>
				@endif
			</div>
        </div>
        <div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Stock') }}</label>
			<div class="col-md-6">
				<input id="stock" type="number" class="bg-white text-dark form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ old('stock') }}" autofocus />
				@if ($errors->has('stock'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('stock')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Imagen del producto') }}</label>
			<div class="col-md-6">
				<input id="imgProducto" type="file" class="pl-2 pt-2 form-control-file{{ $errors->has('imgProducto') ? ' is-invalid' : '' }}" name="imgProducto" >
				@if ($errors->has('imgProducto'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('imgProducto')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row mb-4">
			<div class="col-md-8 offset-md-5">
				<button type="submit" class="btn btn-primary">
					{{ __('Guardar Producto') }}
				</button>
			</div>
		</div>
	</form>
</div>
</div>
	
@endsection
