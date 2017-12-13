@extends('layouts.master')

@section('title', 'Hospital Services')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> {{ $col->college}} Hospital:</h3>
				</div>
				<div class="panel-body">
					@if($hosp->count()>0)
						@foreach($hosp as $hospee)
							<a href="#" role="button" class="btn btn-info">{{ $hospee->hospital }}</a>
						@endforeach
					@else
							<font color="red">No Hospital for this college!</font>
					@endif
				</div>
			</div>
		</div>		
	</div>
</div>

@endsection