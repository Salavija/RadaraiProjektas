@extends('layouts.layout')

@section('content')
<style type="text/css">
	input {
		width: 100%;
		height: 50px;
		font-size: 24px;
		margin: 15px;
		text-align: center;
	}
</style>

<div style="width:500px;">
	<form action="{{ route('drivers.update'), ['driver'=> $driver->id] }}" method="PUT">
			{{ csrf_field() }}
			{{ method_field('PUT') }}

		<input type="string" name="name" value="{{ $driver->name }}">
		<input type="string" name="city" value="{{ $driver->city }}">
		<button type="submit" class="btn btn-success">Atnaujinti</button>
	</form>
</div>
@endsection