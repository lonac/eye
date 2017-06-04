@extends('layouts.master')

@section('title', 'Stuffs:')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}}   Staffs:</h3> 
				</div>
				<div class="panel-body">
					@if($staf->count()>0)
						@foreach($staf as $stafee)
							<strong><a href="{{url('colleges/'.$col->id.'/otherstaffs/show')}}">
								{{$stafee->staff->firstname}}</a></strong>
						@endforeach
					@else
						<font color="red">No any Stuff on this college!</font>
					@endif

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection