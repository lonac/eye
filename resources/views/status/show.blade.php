@extends('layouts.master')

@section('title', 'My Status')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">My Status:</h3> 
				</div>
				<div class="panel-body">
					@if($mystatus->count()>0)
							@foreach( $mystatus as $state)
								<h2>Status:{{  $state->status }}</h2>
								<h3>Updated:{{  $state->updated_at}}</h3>
								Comments:{{  $state->comment}}
							@endforeach
					@else
						<font color="red">No any Status Updated!</font>
					@endif
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection