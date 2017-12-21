@extends('layouts.masterhomepage')

@section('title','Universities')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel panel-heading"><center><h2>UNIVERSITIES</h2></center> 
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel panel-body">
						@if($universities->count()>0)
							@foreach($universities as $university)
								<a href="{{url('/universities/'.$university->id)}}"><h2>{{$university->name}}</h2></a>	
								<a href="{{url('/universities/'.$university->id.'/admin')}}">Admin Panel</a>	
							@endforeach
						@else
							<center>
								<h3>
									-The University may have not been Updated!<br>
									-Or Re-type correctly the words in search-box!<br>
								</h3>
							</center>
						@endif
					</div>
				</div>		
			</div>
		</div>
	</div>
@endsection