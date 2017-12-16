@extends('layouts.master')

@section('title','University Components')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{$university->name}}:</h3>
				</div>
				<div class="panel-body">
					show me university components
				</div>
			</div>
		</div>		
	</div>
</div>

@endsection