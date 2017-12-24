@extends('layouts.master')

@section('title', 'Admin Page')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center>
					<h2>{{$university->name}}</h2>
				</center></div>		
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<strong>
						@if($uni_comp->count()>0)
							<a href="{{url('universities/'.$university->id.'/university_comp')}}" class="btn btn-info">VIEW ALL COMPONENT</a>
						@else
							<h3>There is no any Component or Service Updated for {{$university->name}}, <b>
								Please click default to View Common University Components!</h3>
							<a href="{{url('universities/'.$university->id.'/university_comp/update')}}" class="btn btn-info">UPDATE DEFAULTS</a>
						@endif
					</strong>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<strong>
						<center>University Informations:
						</center>	
					</strong>
				</div>
				<div class="panel-body">
					<a href="{{url('universities/edit/'.$university->id)}}" class="btn btn-warning btn-block">EDIT INFORMATION</a>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection