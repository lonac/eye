@extends('layouts.master')

@section('title', 'Update Component')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-2">
			@if($uni_comp->count()>0)
				<div class="form-group">
					<a href="{{url('universities/'.$university->id.'/university_comp/add')}}" class="btn btn-warning">ADD COMPONENT?</a>	
				</div>
			@else
				<form method="POST" action="{{url('universities/'.$university->id.'/university_comp/update')}}">
				{{csrf_field()}}
				<div class="panel panel-default">
					<div class="panel-heading"><h2>Here are some University Components</h2>
					</div>
					<div class="panel-body">
							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Administration</strong>  <input name="comp_name" type="checkbox" value="administation"></label>
								</div>							
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label> <strong>College</strong>  <input name="comp_name" type="checkbox" value="college"> </label>
								</div>		
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label><strong>Library</strong> <input name="comp_name" type="checkbox" value="library"> </label>
								</div>	
							</div>

							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Cafteria</strong> <input name="comp_name"  type="checkbox" value="cafteria"> </label>
								</div>	
							</div>

							<div class="form-group">
								<div class="checkbox">
									<label><strong>Hospital</strong> <input name="comp_name" type="checkbox" value="hospital"> </label>
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