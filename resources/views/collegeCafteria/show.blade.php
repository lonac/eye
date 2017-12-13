@extends('layouts.master')

@section('title', 'Cafteria Menu')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">  {{ $college->college}} Cafteria:</h3>
				</div>
				<div class="panel-body">
					Show me the Menu!
				</div>
			</div>
		</div>		

	</div>
</div>

@endsection