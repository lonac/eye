@extends('layouts.master')

@section('title','Admin University Sub-Components')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong><h2>{{$university->name}} 
					</h2></strong></center>
				</div>
			</div>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center><h3>{{$comp->comp_name}} 
					<a href="{{url('universities/'.$comp->university_id.'/university_comp/'.$comp->id.'/university-subcomp/add')}}" 
					class="btn btn-primary">ADD SUB-COMPONENT</a></h3></center></div>
				<div class="panel panel-body">
					<!-- UNIVERSITY COMPONENTS -->
					<table class="table">
						@if($uni_subcomp->count()>0)	
						<th>SUB-COMPONENTS</th><th>EDIT</th><th>DELETE</th>
							@foreach($uni_subcomp as $comp)
								<tr>
									<td>{{$comp->name}}</td>
									<td>
										<a href="{{url('universities')}}" class="btn btn-primary">EDIT</a>
									</td>
									<td>
										<a href="{{url('universities')}}" class="btn btn-danger">DELETE</a>
									</td>			
								</tr>
							@endforeach	
						@else
					</table>
							<font color="red">
								<h3>Sorry, no any component Updated for this University!
								<a href="{{url('universities/'.$university->id.'/university_comp/update')}}" class="btn btn-info">UPDATE NOW?</a></h3>
							</font>	
					@endif
				</div>
			</div>
		</div>
		</div>		
	</div>
@endsection