@extends('layouts.master')

@section('title', 'Cafteria')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">  {{ $col->college}} Cafteria:</h3>
				</div>
				<div class="panel-body">
					@if($caf!==null)
						@foreach($caf as $cafee)
							<a href="#" role="button" class="btn btn-info">{{$cafee->cafe_name}}</a>
						@endforeach
					@else
						<font color="red">No Cafteria for this college!</font>
					@endif
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection