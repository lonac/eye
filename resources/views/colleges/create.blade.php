@extends('layouts.master')

@section('title', 'Add College')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> College Registrations:</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('college') ? ' has-error' : '' }}">							
							<label for="college">College Name</label>
							<input type="text" name="college" id="college" class="form-control" placeholder="college name" />
						@if ($errors->has('college'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college') }}</strong>
                                    </span>
                           @endif
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
						<a href="{{url('colleges/'.$col->id.'/')}}" role="button" class="btn btn-success" >SKIP</a>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection