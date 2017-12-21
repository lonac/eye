@extends('layouts.master')

@section('title', 'Update Component')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<center><h2>{{$university->name}}</h2></center>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<!-- Check if there are SubComponents for ths -->
			@if($uni_subcomp->count()>0)
				<div class="form-group">
					<a href="{{url('universities/'.$university->id.'/university_comp/'.$comp->id.'/university-subcomp/add')}}" class="btn btn-info">ADD COMPONENT</a>
				</div>
			@else
				<form method="POST" action="{{url('universities/'.$comp->university_id.'/university_comp/'.$comp->id.'/university-subcomp/create')}}">
					{{csrf_field()}}
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Here are some Common Component and Services, you can Update or Skip</h3>
						</div>
						<div class="panel-body">
								<div class="form-group">
									<div class="checkbox">
										<label> <strong>Lecturers</strong>  <input name="subname[]" type="checkbox" value="Lecturers"></label>
									</div>							
								</div>
								<div class="form-group">
									<div class="checkbox">
										<label> <strong>Financial Department</strong>  <input name="subname[]" type="checkbox" value="Financial Department"> </label>
									</div>		
								</div>
								<div class="form-group">
									<div class="checkbox">
										<label><strong>Informations Technology(IT)</strong> <input name="subname[]" type="checkbox" value="Informations Technology(IT)"> </label>
									</div>	
								</div>

								<div class="form-group">
									<div class="checkbox">
										<label> <strong>Dean Of Students</strong> <input name="subname[]"  type="checkbox" value="Dean Of Students"> </label>
									</div>	
								</div>

								<div class="form-group">
									<div class="checkbox">
										<label><strong>Heads of Department(HOD)</strong> <input name="subname[]" type="checkbox" value="Heads of Department(HOD)"> </label>
									</div>	
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">UPDATE</button>
									<a href="{{url('universities/'.$university->id.'/university-subcomp/add')}}" class="btn btn-info">SKIP</a>
								</div>
							
						</div>
					</div>
				</form>
			@endif

			</div>
		</div>		
	</div>

@endsection