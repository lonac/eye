@extends('layouts.master')

@section('title', 'Admin Page')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading"><center>
					<h2>{{$university->name}}</h2>
				</center></div>		
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<strong>
						@if($uni_comp->count()>0)
							<a href="{{url('universities/'.$university->id.'/university_comp')}}" class="btn btn-info">VIEW ALL COMPONENT</a>
							<a href="{{url('universities/'.$university->id.'/university_comp/add')}}" class="btn btn-warning">ADD COMPONENT?</a>
						@else
							<h3>There is no any Component or Service Updated for {{$university->name}}, <b>
								Please click default below to Upload common Features or You can skip to Add any of your own!</h3>
							<a href="{{url('universities/'.$university->id.'/university_comp/update')}}" class="btn btn-info">UPDATE DEFAULTS</a>
							<a href="{{url('universities/'.$university->id.'/university_comp/add')}}" class="btn btn-warning">SKIP</a>
						@endif
					</strong>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection