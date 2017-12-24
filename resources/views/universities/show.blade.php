@extends('layouts.master')

@section('title',$university->name)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<center><h2>{{$university->name}}</h2></center>
					</div>	
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel panel-body">
						@if($uni_comp!==null)
							@foreach($uni_comp as $comp)
								<a href="{{url('universities/'.$comp->university->id.'/university_comp/'.$comp->id.'/')}}" class="btn btn-info">{{$comp->comp_name}}</a><br>
							@endforeach		
						@endif
					</div>

		
						+Animation video	
		
				</div>
			</div>

			<div class="col-sm-3">
				<div class="panel panel-default">
					<div class="panel panel-heading"><center><strong>More About Us</strong></center></div>
				</div>
				<div class="panel panel-body">
					<label for="city">City/Region: </label>	{{$university->city}} <br>
					<label for="institution_type">Institution Type: </label> {{$university->institution_type}} <br>
					<label for="ownership_status">Ownership Status: </label>  {{$university->ownership_status}} <br>
				</div>
			</div>
		</div>
	</div>
@endsection