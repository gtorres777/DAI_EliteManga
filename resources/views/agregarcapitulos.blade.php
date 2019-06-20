@extends('layouts.app')

@section('content')
    <div class="container">
	<div class="row justify-content-center">
			<h2>Nuevo Manga</h2>
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

	<form action="{{action ('CapituloController@store', $mangas->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
		<div class="form-group row">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Numero capitulo') }}</label>
			<div class="col-md-6">
				<input id="numero_capitulo" type="text" class="form-control{{ $errors->has('numero_capitulo') ? ' is-invalid' : '' }}" name="numero_capitulo" value="{{ old('numero_capitulo') }}" autofocus />
				@if ($errors->has('numero_capitulo'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('numero_capitulo')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row">
			<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Archivo del manga') }}</label>
			<div class="col-md-6">
				<input id="archivoManga" type="file" class="form-control-file{{ $errors->has('archivoManga') ? ' is-invalid' : '' }}" name="archivoManga" >
				@if ($errors->has('archivoManga'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('archivoManga')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row mb-0">
			<div class="col-md-8 offset-md-4">
				<button type="submit" class="btn btn-primary">
					{{ __('Guardar') }}
				</button>
			</div>
		</div>
	</form>
</div>
</div>
	
@endsection
