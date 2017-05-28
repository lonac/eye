@extends('layouts.master')

@section('title', 'Hostel Services')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> {{ $col->college}} Hostels:</h3>
				</div>
				<div class="panel-body">
					@if($hos->count()>0)
						@foreach($hos as $host)
							<a href="#" role="button" class="btn btn-info">{{ $host->hostel }}</a>
						@endforeach
					@else
							<font color="red">No Hostels for this college!</font>
					@endif
				</div>
			</div>
		</div>		
	</div>
</div>

@endsection