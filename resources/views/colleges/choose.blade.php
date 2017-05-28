@extends('layouts.master')

@section('title', 'Choose College')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Choose College and Proceed:</h3>
				</div>
				<div class="panel-body">
					@if($col->count()>0)
						@foreach($col as $colee)
							<a href="{{url('college/'.$colee->id.'/register')}}" role="button" class="btn btn-info">{{$colee->college}}</a>
						@endforeach
					@else
						<font color="red">No Colleges so far!</font>
					@endif
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection