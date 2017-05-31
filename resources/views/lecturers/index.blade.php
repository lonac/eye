@extends('layouts.master')

@section('title', 'Instructors:')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}} Instructors'</h3> 
				</div>
				<div class="panel-body">
					
					@if($lect->count()>0)
						@foreach( $lect as $instr)
							<a href="{{url('colleges/'.$col->id.'/lecturers/show')}}">
								{{$instr->user_id}}</a>
						@endforeach
					@else
						<font color="red">
							Sorry no Instructor registered on this college.
						</font>
					@endif

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection