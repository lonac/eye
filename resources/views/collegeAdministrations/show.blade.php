@extends('layouts.master')

@section('title', $col->college)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> {{$col->college}} Administrations:</h3>
				</div>
				<div class="panel-body">
						<a href="{{url('colleges/'.$col->id.'/colleges/staffs')}}" 
							role="button" class="btn btn-info">Staffs</a>
						<a href="{{url('colleges/'.$col->id.'/collegedepartments/show')}}" 
						role="button" class="btn btn-info">Departments</a>	
				</div>
			</div>
		</div>		
	</div>
</div>

@endsection