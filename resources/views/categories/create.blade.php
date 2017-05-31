@extends('layouts.master')

@section('title', 'Add Category')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> College Categories at {{ $col->college}}</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/' .$col->id.'/categories/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('cat_name') ? ' has-error' : '' }}">	
							<label for="colgcategories">College Category:</label>
							<input type="text" name="cat_name" id="category" class="form-control" placeholder="categories e.g Administration" />
							@if ($errors->has('cat_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_name') }}</strong>
                                    </span>
                              @endif
						</div>
						<button type="submit" class="btn btn-success">ADD</button>
						<a href="{{url('colleges/'.$col->id.'/')}}" role="button" class="btn btn-success" >SKIP</a>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection