@extends('layouts.master')

@section('title', 'Staff Ids')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Staff Ids registers:</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('staffId/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="StaffIds">First Name</label>
							<input type="text" name="staff_id" id="staffid" class="form-control" placeholder="Staff Id" />
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection