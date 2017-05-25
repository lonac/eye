@extends('layouts.master')

@section('title', 'Departments')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Departments at {{ $col->college}}</h3>
				</div>
				<div class="panel-body">
					@if($dep->count()>0)
						@foreach($dep as $depatee)
							<a href="#" role="button" class="btn btn-info">{{$depatee->depart_name}}</a>
						@endforeach
					@else
						<font color="red">No departments for this college!</font>
					@endif
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection