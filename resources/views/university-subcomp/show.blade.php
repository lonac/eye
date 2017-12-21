@extends('layouts.master')

@section('title',$university->name)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<center><h2>{{$university->name}}</h2></center>
						</div>	
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
						<div class="panel panel-body">
							@if($uni_subcomp->count()>0)
								@foreach($uni_subcomp as $comp)
									<a href="" class="btn btn-info">{{$comp->name}}</a>
								@endforeach	
							@else
								<p>Nothing Update so far!</p>
							@endif
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection