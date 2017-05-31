@extends('layouts.master')

@section('title', 'Cafteria Registrations')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}} Cafteria Registrations:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/collegeCafteria/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('cafe_name') ? ' has-error' : '' }}">
							<label for="cafteria">Cafteria Name:</label>
							<input type="text" name="cafe_name" id="cafe_name" class="form-control" placeholder="Cafteria Name" />
							@if ($errors->has('cafe_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cafe_name') }}</strong>
                                    </span>
                           @endif
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
						<a href="{{url('colleges/'.$col->id.'/collegeHostels/create')}}" role="button" class="btn btn-success" >SKIP</a>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection