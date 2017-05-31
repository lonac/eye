@extends('layouts.master')

@section('title', 'Hostels Registrations')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}} Hostels Registrations:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/collegeHostels/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('hostel') ? ' has-error' : '' }}">
							<label for="hostel">Hostel Name:</label>
							<input type="text" name="hostel" id="hostel" class="form-control" placeholder="Hostel Name" />
							@if ($errors->has('hostel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hostel') }}</strong>
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