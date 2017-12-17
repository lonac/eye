@extends('layouts.master')

@section('title','University Components')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><strong><h3>{{$university->name}}
					</h3></strong></center>
				</div>
				<div class="panel panel-body">
					@if($uni_comp->count()>0)
						<table class="table">
							<th>Component</th><th>Action </th>		
								@foreach($uni_comp as $comp)
								<tr>
									<td><strong><h3>{{$comp->comp_name}} </h3></strong></td>
									<td>
										<a href="{{url('universities/'.$comp->university_id.'/university_comp/edit/'.$comp->id)}}" class="btn btn-info">EDIT?</a> 
										<a href="" class="btn btn-warning"> DELETE</a>
									</td> <br>
								</tr>
								@endforeach
						
						</table>									
					@else
					<font color="red">
						<h3>Sorry, no any component Updated for this University!</h3>
					</font>	
						<a href="{{url('universities/'.$university->id.'/university_comp/update')}}" class="btn btn-info">UPDATE COMPONENT?</a>

					@endif
				</div>
			</div>
		</div>
		</div>		
	</div>
@endsection