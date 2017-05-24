@extends('layouts.master')

@section('title', 'Colleges')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Colleges at UDOM:</h3>
				</div>
					<div class="panel-body">
						@if($col->count()>0)
								
							@foreach($col as $colg)	
								<a href="{{ url('colleges/' . $colg->id) }}" role="button"
									class="btn btn-primary">{{ $colg->college }}</a>
							@endforeach
					
					@else
						No colleges so far

					@endif
					</div>
			</div>
		</div>		
	</div>

</div>

@endsection