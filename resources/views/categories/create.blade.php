@extends('layouts.master')

@section('title', 'Add Category')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> College Categories at {{ $col->col_name}}</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/' .$col->id.'/categories/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="colgcategories">College Category:</label>
							<input type="text" name="cat_name" id="category" class="form-control" placeholder="categories e.g Administration" />
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection