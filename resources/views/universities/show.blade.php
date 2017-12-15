@extends('layouts.master')

@section('title',$university->name)
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading"><h1>Welcome at {{$university->name}}</h1></div>
					<div class="panel panel-body">
						
					</div>
				</div>		
			</div>
		</div>
	</div>
@endsection