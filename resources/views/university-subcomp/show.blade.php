@extends('layouts.master')

@section('title',$university->name)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<center><strong><h2>{{$university->name}} ADMINISTRATION</h2></strong></center>
						</div>	
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
					<div class="panel panel-body">
						show me informations
					</div>
			</div>
		</div>
	</div>
@endsection