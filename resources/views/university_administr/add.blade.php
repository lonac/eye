@extends('layouts.master')

@section('title', 'Add Component')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<form method="POST" action="{{url('/universities/'.$university->id.'/university_administr/add')}}">
				{{csrf_field()}}
				<div class="panel panel-default">
					<div class="panel-heading"><center><h2>Add Component at {{$university->name}}</h2></center>
					</div>
					
					<div class="panel-body">
						<div class="form-group">
							<div class="col-md-2">
								<label for="name">NAME</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" placeholder="School Mentor,">
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
</div>

@endsection