@extends('layouts.master')

@section('title','University Components')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong><h2>{{$university->name}} 
						@if($uni_comp->count()>0)		
							@foreach($uni_comp as $comp)
								>{{$comp->comp_name}}
							@endforeach
						@endif
					</h2></strong></center>
				</div>

				<div class="panel panel-body">
					<!-- DISPLAY ADMINISTR CONTENTS -->
					@if($administr->count()>0)
						@foreach($administr as $admin)
							<strong><h2><a href="" class="btn btn-info">{{$admin->name}}</a></h2></strong>
						@endforeach
					@endif

					<!-- UNIVERSITY COMPONENTS -->
					@if(!$uni_comp->count()>0)		
						<font color="red">
							<h3>Sorry, no any component Updated for this University!</h3>
						</font>	
					@endif
				</div>
			</div>
		</div>
		</div>		
	</div>
@endsection