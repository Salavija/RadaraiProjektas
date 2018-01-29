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
	<form action="{{ route('radars.update', ['radar'=> $radar->id]) }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<input type="string" name="date" value="{{ $radar->date }}" placeholder="Iveskite datą">
		<input type="string" name="number" value="{{ $radar->number }}" placeholder="Iveskite numerį">  
		<input type="string" name="time" value="{{ $radar->time }}" placeholder="Iveskite laiką">
		<input type="string" name="distance" value="{{ $radar->distance }}" placeholder="Iveskite atstumą">
		<button type="submit" class="btn btn-success">Atnaujinti</button>
	</form>
</div>