@extends('layouts.app')

@section('content')
<div class="container altura pt-5 altura">
		<div class="row card info text-white">
			<div class="col-12 col-sm-12 col-md-12 col-xl-12">
				<h2 class="textbox pt-2 " >Nuevo Capitulo</h2>
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
	<div class="col-12 pt-5 ">
	<form action="{{action ('CapituloController@store', $mangas->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
		<div class="form-group row pb-3">
			<label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Numero capitulo') }}</label>
			<div class="col-md-6">
				<input id="numero_capitulo" type="text" class="bg-white text-dark form-control{{ $errors->has('numero_capitulo') ? ' is-invalid' : '' }}" name="numero_capitulo" value="{{ old('numero_capitulo') }}" autofocus />
				@if ($errors->has('numero_capitulo'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('numero_capitulo')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row pb-3">
			<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Archivo del manga') }}</label>
			<div class="col-md-6">
				<input id="archivoManga" type="file" class="pl-2 pt-2 form-control-file{{ $errors->has('archivoManga') ? ' is-invalid' : '' }}" name="archivoManga" >
				@if ($errors->has('archivoManga'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('archivoManga')}}</strong>
					</span>
				@endif
			</div>
		</div>
		<div class="form-group row mb-4">
			<div class="col-md-8 offset-md-4">
				<button type="submit" class="btn btn-primary">
					{{ __('Guardar Capitulo') }}
				</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
	
@endsection
