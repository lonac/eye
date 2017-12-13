@extends('layouts.master')

@section('title', 'Financial Staffs')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}} Financial Staffs:</h3> 
				</div>
				<div class="panel-body">
					@if($fin->count()>0)
						@foreach($fin as $finee)
							<strong><a href="{{url('colleges/'.$col->id.'/financial/show')}}">
								{{$finee->money->firstname}}  {{$finee->money->lastname}}</a></strong>
						@endforeach
					@else
						<font color="red">No any Financial related information!</font>
					@endif
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection