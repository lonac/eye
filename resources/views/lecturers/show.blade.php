@extends('layouts.master')

@section('title', 'Instructors:')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}}: Instructors'</h3> 
				</div>
				<div class="panel-body">
					
					@if($lect->count()>0)
						@foreach( $lect as $instr)
							<a href="">{{$instr->officeNo}}</a>
						@endforeach
					@else
						<font>
							sorry no Instructor registered on this college.
						</font>
					@endif

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection