@extends('layouts.master')

@section('title', 'Add Component')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center><h3><strong>{{$university->name}}</strong></h3></center></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-11 col-sm-offset-1">
			<form method="POST" action="{{url('/universities/'.$university->id.'/university_comp/add')}}">
				{{csrf_field()}}
				<div class="panel panel-default">
					<div class="panel-heading"><center><h3>Add Extra Component or Service</h3></center>
					</div>
					
					<div class="panel-body">
						<div class="form-group">
							<div class="col-md-2">
								<label for="name">NAME</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comp_name" placeholder="e.g SPORTS and GAMES,">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-md-offset-2">
								<input type="submit" class="btn btn-info btn-lg btn-block">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-md-offset-2">
								<a href="{{url('universities/'.$university->id.'/university_comp')}}" class="btn btn-info btn-lg btn-info">SKIP</a>
							</div>
						</div>
					</div>
				</div>			
			</form>
		</div>	
	</div>
</div>

@endsection