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
							@if($uni_comp->count()>0)
								@foreach($uni_comp as $comp)
									<a href="{{url('universities/'.$comp->university->id.'/university_comp/'.$comp->comp_name.'/')}}" class="btn btn-info">{{$comp->comp_name}}</a><br>
								@endforeach		
							@endif
						</div>

						<div class="col-md-4">
							Animation video	
						</div>

						<div class="col-md-4">
								other features available for uni
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection