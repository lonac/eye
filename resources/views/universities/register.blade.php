@extends('layouts.master')

@section('title','Register University')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form  action="{{url('universities/register')}}" method="POST">
					{{ csrf_field()}}
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2> <strong>University Details:</strong></h2>				
					</div>
					<div class="panel-body">
						<div class="form-group">
							<div class="col-md-4">
								<label for="university_name">NAME</label>
							</div>
							<div class="col-md-6">
								<input type="text" name="university_name" class="form-control" placeholder="eg. UNIVERSITY OF DODOMA">
							</div>							
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="code">CODE</label>
							</div>
							<div class="col-md-6">
								<input type="text" name="code" class="form-control" placeholder="eg. CC,JB,BM">
							</div>							
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="institution_type">INSTITUTION TYPE</label>
							</div>
							<div class="col-md-6">
								<select class="form-control" name="institution_type">
									<option value="">Choose</option>
									<option value="institution_type">University</option>
									<option value="institution_type">Non-University</option>
									<option value="institution_type">University-College</option>
									<option value="institution_type">University-Center</option>
								</select>
							</div>							
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="ownership_status">OWNERSHIP STATUS</label>
							</div>
							<div class="col-md-6">
								<select class="form-control" name="ownership_status">
									<option value="">Choose</option>
									<option value="ownership_status">Public</option>
									<option value="ownership_status">Private</option>
								</select>
							</div>							
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="city">REGION/CITY</label>
							</div>
							<div class="col-md-6">
								<input type="text" name="city" class="form-control" placeholder="eg. Bujumbura, Dodoma">
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