@extends('layouts.master')

@section('title', 'Add Component')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center><h2><strong>{{$university->name}}</strong></h2></center></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			@if($uni_comp->count()>0)
				@foreach($uni_comp as $comp)
					<form method="POST" action="{{url('/universities/'.$comp->university_id.'/university_comp/'.$comp->id.'/university-subcomp/add')}}">
						{{csrf_field()}}
						<div class="panel panel-default">
							<div class="panel-heading"><center><h3>Add Component or Service at <b>{{$comp->comp_name}}</b></h3></center>
							</div>
							
							<div class="panel-body">
								<div class="form-group">
									<div class="col-md-2">
										<label for="name">NAME</label>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" placeholder="e.g. College Name, Cafteria, Clubs">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-md-offset-6">
										<input type="submit" class="btn btn-info btn-lg btn-block">
									</div>
								</div>
							</div>
						</div>			
					</form>
				@endforeach
			@else
				<font color="red">Sorry, It seem there is no Component Updated in Here!</font>
			@endif
		</div>	
	</div>
</div>

@endsection