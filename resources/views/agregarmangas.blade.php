@extends('layouts.app')

@section('content')
<div class="container  altura pt-5">
	<div class="row card text-white" style="background-color:rgba(31,31,31, 0.5)">
		<div class="col-12 col-sm-12 col-md-12 col-xl-12 pb-2">
			<h2 class=" textbox">Nuevo Manga</h2>
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

	<form action="{{action ('CapituloController@storeManga')}}" method="POST" enctype="multipart/form-data" class="col-md-11">
	@csrf
		<div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Titulo del Manga') }}</label>
			<div class="col-md-6">
				<input id="titulo_manga" type="text" class="text-dark bg-white form-control{{ $errors->has('titulo_manga') ? ' is-invalid' : '' }}" name="titulo_manga" value="{{ old('titulo_manga') }}" autofocus />
				@if ($errors->has('titulo_manga'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('titulo_manga')}}</strong>
					</span>
				@endif
			</div>
        </div>
        <div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
			<div class="col-md-6">
				<input id="descripcion" type="text" class="text-dark bg-white form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" autofocus />
				@if ($errors->has('descripcion'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('descripcion')}}</strong>
					</span>
				@endif
			</div>
		</div>
        <div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
			<div class="col-md-6">
				<input id="categoria" type="text" class="text-dark bg-white form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" name="categoria" value="{{ old('categoria') }}" autofocus />
				@if ($errors->has('categoria'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('categoria')}}</strong>
					</span>
				@endif
			</div>
        </div>
        <div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('estado') }}</label>
			<div class="col-md-6">
				<input id="estado" type="text" class="text-dark bg-white form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" value="{{ old('estado') }}" autofocus />
				@if ($errors->has('estado'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('estado')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
			<div class="col-md-6">
				<input id="imgManga" type="file" class="pt-2 pl-2 form-control-file{{ $errors->has('imgManga') ? ' is-invalid' : '' }}" name="imgManga" >
				@if ($errors->has('imgManga'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('imgManga')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row mb-3">
			<div class="col-md-6 offset-md-5">
				<button type="submit" class="btn btn-primary">
					{{ __('Guardar') }}
				</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>
	
@endsection
