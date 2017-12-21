@extends('layouts.master')

@section('title', $unicomp->comp_name)

@section('content')

<div class="container">
	@if($comp->count()>0)
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><center><h2>Edit Component at {{$university->name}}</h2></center></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<form method="post" action="{{url('universities/'.$university->id.'/university_comp/edit/'.$unicomp->id)}}">
				{{csrf_field()}}
				{{method_field('PATCH')}}
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="form-group">
							<div class="col-md-2">
								<label for="name">NAME</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comp_name" placeholder="{{$unicomp->comp_name}}">
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
		</div>	
	</div>
	@else
		@include('errors.503')
	@endif
</div>

@endsection