@extends('layouts.master')

@section('title', 'Show College')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Colleges at UDOM:</h3>
				</div>

			</div>
		</div>		

	</div>

		<div class="col-md-8">
			<div class= "well">
				@if($col->count()>0)
							
						@foreach($col as $colg)	
							<a href="{{ url('colleges/' . $colg->id) }}">{{ $colg->col_name }}</a>
						@endforeach

					
				@else
					No colleges so far

				@endif
			</div>	
		</div>

</div>

@endsection