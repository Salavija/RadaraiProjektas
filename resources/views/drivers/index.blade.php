@extends('layouts.layout')

@section('content')

<table class="table table-dark">
	<tr>
		<TD>vardas</TD>
		<TD>miestas</TD>
	</tr>
@foreach($drivers as $driver)
<tr>
	<td>{{ $driver->name }}</td>
	<td>{{ $driver->city }}</td>

	<td>
		<form action="{{ route('driver.edit', ['driver'=> $driver->id]) }}" method="POST">
			{{ csrf_field() }}
		<button type="submit" class="btn btn-success">Atnaujinti</button>
		</form>
	</td>

	<td>
		<form action="{{ route('driver.destroy', ['driver'=> $driver->id]) }}" method="DELETE">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<button type="submit" class="btn btn-danger ">Ištrinti</button>
		</form>
	</td>
</tr>
@endforeach
</table>

{{ $drivers->links() }}

@endsection