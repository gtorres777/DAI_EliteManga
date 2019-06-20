@extends('layouts.app')

@section('content')
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="{{ asset('capitulos/' . $capitulos->archivo) }}" allowfullscreen></iframe>
</div>


@endsection