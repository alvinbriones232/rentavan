@extends('main')

@section('container')
	<div class="row">
		<table class="table">
			<tr>
				<td>Name of the company/person</td>
				<td><input type="text" name="name" class="form-control"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td>
					<select name="location">
						<option>--Choose your location--</option>
						
					</select>
				</td>
			</tr>
		</table>
	</div>
@endsection