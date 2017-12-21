@extends('layouts.master')

@section('title', 'Update Component')

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
			@if($uni_comp->count()>0)
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<div class="form-group">
							<a href="{{url('universities/'.$university->id.'/university_comp/add')}}" class="btn btn-warning">ADD COMPONENT?</a>	
						</div>
					</div>
				</div>
			@else
				<form method="POST" action="{{url('universities/'.$university->id.'/university_comp/update')}}">
				{{csrf_field()}}
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Here are some Common University Components just Update or Skip</h3>
					</div>
					<div class="panel-body">
							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Administration</strong>  <input name="comp_name[]" type="checkbox" value="Administration"></label>
								</div>							
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label> <strong>College</strong>  <input name="comp_name[]" type="checkbox" value="College"> </label>
								</div>		
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label><strong>Library</strong> <input name="comp_name[]" type="checkbox" value="Library"> </label>
								</div>	
							</div>

							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Cafteria</strong> <input name="comp_name[]"  type="checkbox" value="Cafteria"> </label>
								</div>	
							</div>

							<div class="form-group">
								<div class="checkbox">
									<label><strong>Hospital</strong> <input name="comp_name[]" type="checkbox" value="Hospital"> </label>
								</div>	
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">UPDATE</button>
								<a href="{{url('universities/'.$university->id.'/university_comp/add')}}" class="btn btn-info">SKIP</a>
							</div>
						
					</div>
			</div>
			</form>
			@endif
		</div>		

	</div>
</div>

@endsection