@extends('layouts.master')

@section('title','Register University')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel panel-heading">UNIVERSITIES</div>
					<div class="panel panel-body">
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