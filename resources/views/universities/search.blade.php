@extends('layouts.masterhomepage')

@section('title','Universities')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel panel-heading"><center><strong><h3>UNIVERSITIES</h3></strong></center> 
					</div>
					<div class="panel panel-body">
						@if($search_word!==null)
							<h3>Your Search for <b>{{$search_word}} </b> ({{count($universities)}} results)</h3>
						@endif
						@if($universities->count()>0)
							@foreach($universities as $university)
								<a href="{{url('/universities/'.$university->id)}}"><h2>{{$university->name}}</h2></a>		
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