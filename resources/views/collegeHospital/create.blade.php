@extends('layouts.master')

@section('title', 'Hospital Registrations')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}} Hospital Registrations:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/collegeHospital/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('hospital') ? ' has-error' : '' }}">
							<label for="hospital">Hospital Name:</label>
							<input type="text" name="hospital" id="hospital" class="form-control" placeholder="Hospital Name" />
							@if ($errors->has('hospital'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hospital') }}</strong>
                                    </span>
                           @endif
						</div>
						<button type="submit" class="btn btn-success">Save</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection