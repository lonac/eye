@extends('layouts.master')

@section('title',$university->name)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<center><strong><h2>{{$university->name}}</h2></strong></center>
						</div>	
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
					<div class="panel panel-body">

						<div class="col-md-4">
							categories available for university
						</div>

						<div class="col-md-4">
							<center>
								<img id="loading" src="{{asset('/images/jicho.jpg')}}" width="100" length="100">
							</center>	
						</div>

						<div class="col-md-4">
								other features available for uni
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection