@extends('layouts.master')

@section('title', 'Other Stuffs')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">College of {{$col->col_name}}: Staffs Details:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/otherstaffs/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="employ ID">Employee ID:</label>
							<input type="text" name="employee_id" id="employee id" class="form-control" placeholder="Employee ID" />
						</div>
						<div class="form-group">
							<label for="officeNo">Office No:</label>
							<input type="text" name="officeNo" id="officeNo" class="form-control" placeholder="Office Number">
						</div>

						@if($dep->count()> 0)
							<div class="form-group">
								<label for="department">Department:</label>
								<select class="form-control" name="department">
									@foreach($dep as $depatee)
										<option>{{ $depatee->depart_name}}</option>
									@endforeach
								</select>
							</div>
						@endif

						<div class="form-group">
							<label for="BlockNo">Apartment No:</label>
							<input type="text" name="BlockNo" id="BlockNo" class="form-control" placeholder="Apartment or Block No">
						</div>
						<button type="submit" class="btn btn-success">Save</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection