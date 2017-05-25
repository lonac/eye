@extends('layouts.master')

@section('title', 'Lecturers details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}}: Instructors' Details:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/lecturers/create') }}">

						{{ csrf_field() }}

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
						<button type="submit" class="btn btn-success">Save</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection