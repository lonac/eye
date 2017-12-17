@extends('layouts.masterhomepage')

@section('title','Universities')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel panel-heading"><center><strong><h3>UNIVERSITIES</h3></strong></center> 
					</div>
					<div class="panel panel-body">
						@if($search_word!==null)
							<h3>Your Search for <b>{{$search_word}} </b> {{count($universities)}}</h3>
						@endif
						@if($universities!==null)
							@foreach($universities as $university)
								<a href="{{url('/universities/'.$university->id)}}"><h2>{{$university->name}}</h2></a>		
							@endforeach
						@else
							<font><h3>No Universities Registered so far!</h3></font>
						@endif
					</div>
				</div>		
			</div>
		</div>
	</div>
@endsection