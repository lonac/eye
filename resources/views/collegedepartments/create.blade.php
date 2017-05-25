@extends('layouts.master')

@section('title', 'Add Departments')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> {{ $col->college}} Departments</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/' .$col->id.'/collegedepartments/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('depart_name') ? ' has-error' : '' }}">
							<label for="colgdepartments">College Departments:</label>
							<input type="text" name="depart_name" id="departments" class="form-control" placeholder="Department" />
							@if ($errors->has('depart_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('depart_name') }}</strong>
                                    </span>
                           @endif
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection