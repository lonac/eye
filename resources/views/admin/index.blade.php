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
					<a href="{{url('universities/'.$university->id.'/university_comp/update')}}" class="btn btn-info">UNIVERSITY COMPONENTS</a>
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection