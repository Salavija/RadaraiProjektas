@extends('layouts.layout')

@section('content')
<body class="text-center">
<div class="container">
<table class="table table-striped table-dark">
	<thead>
		<tr>
			<TD>Data</TD>
			<TD>Numeris</TD>
			<TD>Greitis</TD>
			<TD>vardas</TD>
			<TD>city</TD>
		</tr>
	</thead>
	<tbody>
@foreach($radars as $radar)
		<tr>
			<td>{{ $radar->date}} </td>
			<td>{{ $radar->number }} </td>
			<td>{{ $radar->distance / $radar->time }}</td>

			@if ($radar->driver)
			<td>{{ $radar->driver->name }}</td>
			<td>{{ $radar->driver->city }}</td>
			@else
			<td>{{ $radar->undefined }}</td>
			<td>{{ $radar->undefined }}</td>
			@endif

		@if($radar->trashed())
			<td>
				<form action="{{ route('radars.destroy', ['radar' => $radar->id]) }}" method="POST">
				 {{ csrf_field() }}
				 {{ method_field('DELETE') }}
				 	<button type="submit" class="btn btn-danger">Pašalinti</button>
				</form>
			</td>
			<td>
				<form action="{{ route('radars.restore', ['radar' => $radar->id]) }}" method="POST">
				 {{ csrf_field() }}
				 {{ method_field('POST') }}
				 	<button type="submit" class="btn btn-outline-success">Grąžinti</button>
				</form>
			</td>
			@else
			<td>
				<form action="{{route('radars.edit', ['radar' => $radar->id]) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('GET') }}
				<button type="submit" class="btn btn-warning">Atnaujinti</button>
				</form>
			</td>

			<td>
				<form action="{{ route('radars.destroy', ['radar' => $radar->id]) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-outline-danger" >Ištrinti</button>
				</form>
			</td>
		@endif
		</tr>
	</tbody>
@endforeach
</table>
{{ $radars->links() }}
</div>
</body>

@endsection
<br>
<br>

<!-- //prisideti cretedBy, updatedBy -->