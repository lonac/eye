@extends('layouts.master')

@section('title', 'My Status')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">My Status:</h3> 
				</div>
				<div class="panel-body">
				<h2>Status:      {{  $mystatus->status }}</h2>
				<h3>Update at:<font color="red">   {{ $mystatus->updated_at}}</font></h3>
				<strong>Comment:</strong>{{ $mystatus->comment}}		
			</div>
		</div>		

	</div>
</div>

@endsection