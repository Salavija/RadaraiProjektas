@if (!is_null($driver))
<table style="border: 3px solid black; font-size: 58px; text-align: center;">
	<tr>
		<td>name</td>
		<td>city</td>
	</tr>
	<tr>
		<td>{{ $driver->name }}</td>
		<td>{{ $driver->city }}</td>
	</tr>
</table>
@else
<h1> tokio iraso nera</h1>
@endif