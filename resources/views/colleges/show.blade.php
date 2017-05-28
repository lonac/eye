@extends('layouts.master')

@section('title', $college->college)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Welcome at {{$college->college}}:</h3>
				</div>
				<div class="panel-body">
					<a href="{{url('colleges/'.$college->id.'/collegeAdministrations/show')}}"
						role="button" class="btn btn-info">Administrations</a>
					<a href="{{url('colleges/'.$college->id.'/collegeCafteria/show')}}"
						role="button" class="btn btn-info">Cafteria Services</a>
					<a href="{{url('colleges/'.$college->id.'/collegeHostels/show')}}"
						role="button" class="btn btn-info">Hostel Service</a>
					<a href="{{url('colleges/'.$college->id.'/collegeHospital/show')}}"
						role="button" class="btn btn-info">Hospital Services</a>
				</div>
			</div>
		</div>		
	</div>
</div>

@endsection