@extends('layouts.master')

@section('title', $col->college)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> {{$col->college}} Staffs:</h3>
				</div>
				<div class="panel-body">
						<a href="{{url('colleges/'.$col->id.'/lecturers/index')}}" 
							role="button" class="btn btn-info">Instructors</a>
						<a href="{{url('colleges/'.$col->id.'/financial/index')}}"
						 role="button" class="btn btn-info">Financial</a>
						<a href="{{url('colleges/'.$col->id.'/otherstaffs/index')}}"
						 role="button" class="btn btn-info">Dean of Students</a>		
				</div>
			</div>
		</div>		
	</div>
</div>

@endsection