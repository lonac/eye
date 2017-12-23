@extends('layouts.master')

@section('title','University Components')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><h2>{{$university->name}} 
					</h2></center>
				</div>
			</div>
		</div>
	</div>

	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center>{{$comp->comp_name}}</center>
				</div>
				<div class="panel panel-body">
					<!-- DISPLAY UNI-SUBCOMP CONTENTS -->
					@if($uni_subcomp->count()>0)
						@foreach($uni_subcomp as $comp)
							<h4><a href="{{url('universities/'.$comp->university_component->university_id.'/university_comp/'.$comp->university_components_id.'/university-subcomp/show')}}" 
								class="btn btn-info">{{$comp->name}}</a></h4>
						@endforeach
					@else
					<font color="red">
						<center>
							<h3>Sorry, no any component Updated for this University!</h3>
						</center>
					</font>

					@endif
				</div>
			</div>
		</div>
		</div>		
	</div>
@endsection