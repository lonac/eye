@extends('layouts.master')

@section('title', 'Admin Page')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-sm-offset-0">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center>
					<h1>{{$university->name}}</h1>
				</center></div>
				<div class="panel-body">
					
				</div>
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<strong><h3>University Components 
						<a href="{{url('universities/'.$university->id.'/university_comp/show')}}" class="btn btn-info">VIEW</a>
						<a href="{{url('universities/'.$university->id.'/university_comp/add')}}" class="btn btn-warning">ADD COMPONENT?</a>
					</h3></strong>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection