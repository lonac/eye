@extends('layouts.master')

@section('title', 'Status')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">My Status:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('status/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
							<label for="status">Status:</label>
							<select class="form-control" name="status">
								<option value="Non">Non</option>
								<option value="Available">Available</option>
								<option value="Busy">Busy</option>
								<option value="In a Meeting">In a Meeting</option>
								<option value="Lecture Room">Lecture Room</option>
								<option value="Not Avaivable">Not Avaivable</option>
							</select>
						</div>

						<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
							<label for="comment">Comment:</label>
							<input type="text" name="comment" id="comment" class="form-control" placeholder="Live Comment here" />
							@if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
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