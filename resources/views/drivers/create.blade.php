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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div style="width:500px;">
	<form action="{{ route('drivers.store') }}" method="POST">

		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<input value="{{ old('name') }}" type="string" name="name" placeholder="Iveskite vardą">
		<input value="{{ old('city') }}"  type="string" name="city" placeholder="Iveskite miestą">
		<button class="btn btn-primary btn-lg" type="submit">Pridėti</button>
	</form>
</div>
@endsection