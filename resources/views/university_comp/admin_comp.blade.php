@extends('layouts.master')

@section('title','Admin University Components')

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
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel panel-body">
					<!-- UNIVERSITY COMPONENTS -->
					<table class="table">
						@if($uni_comp->count()>0)	
						<th>COMPONENT</th><th>ACTION</th>
							@foreach($uni_comp as $comp)
								<tr>
									<td>{{$comp->comp_name}}</td>
									<td>
										<a href="{{url('universities/'.$university->id.'/university_comp/'.$comp->id.'/university-subcomp')}}" class="btn btn-primary">VIEW</a>
										<a href="{{url('universities/'.$university->id.'/university_comp/edit/'.$comp->id)}}" class="btn btn-primary">EDIT</a>
									</td>
									<td>
										<form action="" method="post">
								            {{csrf_field()}}
								            <input name="_method" type="hidden" value="DELETE">
								            <button class="btn btn-danger" type="submit">Delete</button>
								          </form>
									</td>			
								</tr>
							@endforeach	
							<th>
								<a href="{{url('universities/'.$university->id.'/university_comp/add')}}">ADD COMPONENT</a>
							</th>
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