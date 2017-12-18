@extends('layouts.master')

@section('title', 'Update Component')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-2">
				<div class="form-group">
					<a href="{{url('universities/'.$university->id.'/university_administr/update')}}" class="btn btn-warning">ADD COMPONENT?</a>	
				</div>
				<form method="POST" action="{{url('universities/'.$university->id.'/university_administr/update')}}">
				{{csrf_field()}}
				<div class="panel panel-default">
					<div class="panel-heading"><h2>Here are some Administration Components</h2>
					</div>
					<div class="panel-body">
							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Lecturers</strong>  <input name="administration[]" type="checkbox" value="Lecturers"></label>
								</div>							
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Financial Department</strong>  <input name="administration[]" type="checkbox" value="Financial Department"> </label>
								</div>		
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label><strong>Informations Technology(IT)</strong> <input name="administration[]" type="checkbox" value="Informations Technology(IT)"> </label>
								</div>	
							</div>

							<div class="form-group">
								<div class="checkbox">
									<label> <strong>Dean Of Students</strong> <input name="administration[]"  type="checkbox" value="Dean Of Students"> </label>
								</div>	
							</div>

							<div class="form-group">
								<div class="checkbox">
									<label><strong>Heads of Department(HOD)</strong> <input name="administration[]" type="checkbox" value="Heads of Department(HOD)"> </label>
								</div>	
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">UPDATE</button>
								<a href="{{url('universities/'.$university->id.'/university_administr/add')}}" class="btn btn-info">SKIP</a>
							</div>
						
					</div>
			</div>
			</form>
		</div>		

	</div>
</div>

@endsection