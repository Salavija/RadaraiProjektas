<table style='border: 3px solid black; font-size: 58px; text-align: center;'>
	<tr>
		<td>name</td>
		<td>city</td>
	</tr>
	@foreach ($drivers as $driver)
	<tr>
		<td>{{ $driver->name }}</td>
		<td>{{ $driver->city }}</td>
	</tr>
	@endforeach
</table>