@extends('layouts.master')

@section('title', $university->name)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><center><h2>Edit Informations for {{$university->name}} </h2></center></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<form method="post" action="{{url('universities/edit/'.$university->id)}}">
				{{csrf_field()}}
				{{method_field('PATCH')}}
				<div class="panel panel-default">		
					<div class="panel panel-body">
							<div class="form-group">
							<div class="col-md-4">
								<label for="university_name">NAME</label>
							</div>
							<div class="col-md-6">
								<input type="text" name="university_name" class="form-control" value="{{$university->name}}">
							</div>							
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="code">CODE</label>
							</div>
							<div class="col-md-6">
								<input type="text" name="code" class="form-control" value="{{$university->code}}">
							</div>							
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="institution_type">INSTITUTION TYPE</label>
							</div>
							<div class="col-md-6">
								<select class="form-control" name="institution_type">
									<option value="{{$university->institution_type}}">{{$university->institution_type}}</option>
									<option value="University">University</option>
									<option value="Non-University">Non-University</option>
									<option value="University-College">University-College</option>
									<option value="University-Center">University-Center</option>
								</select>
							</div>							
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="ownership_status">OWNERSHIP STATUS</label>
							</div>
							<div class="col-md-6">
								<select class="form-control" name="ownership_status">
									<option value="{{$university->ownership_status}}">{{$university->ownership_status}}</option>
									<option value="Public">Public</option>
									<option value="Private">Private</option>
								</select>
							</div>							
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="city">REGION/CITY</label>
							</div>
							<div class="col-md-6">
								<input type="text" name="city" class="form-control" value="{{$university->city}}">
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