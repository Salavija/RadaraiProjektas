<!-- <style>
	input {
		width: 100%;
		height: 50px;
		font-size: 24px;
		margin: 15px;
		text-align: center;
	}
</style>
 -->

@extends('layouts.layout')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section('content')

<body class="text-center">
	<div class="form-group">
		<div class="container">
    	<form class="form-signin" action="{{ route('radars.store') }}" method="POST">
     	 <h1 class="h3 mb-3 font-weight-normal">Radaro duomenys</h1>

		   {{ csrf_field() }}
		   {{ method_field('PUT') }}

		<div class="form-group">
			<input value="{{ old('date') }}" type="string" name="date" placeholder="Iveskite datą">
		</div>
		<div class="form-group">
			<input value="{{ old('number') }}" type="string" name="number" placeholder="Iveskite numerį">
		</div>
		<div class="form-group">
			<input value="{{ old('time') }}"  type="string" name="time" placeholder="Iveskite laiką" >
		</div>
		<div class="form-group">
			<input value="{{ old('distance') }}"  type="string" name="distance" placeholder="Iveskite atstumą">
		</div>
		<button class="btn btn-lg btn-primary" type="submit">Pridėti</button>
      <p class="mt-5 mb-3 text-muted">© 2018</p>
    </form>
    </div>
</div>
</body>

@endsection