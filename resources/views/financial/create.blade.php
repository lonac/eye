@extends('layouts.master')

@section('title', 'Stuff details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">{{$col->college}}: Financial Details:</h3> 
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/financial/create') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="officeNo" class="col-md-4 control-label">Office No:</label>
								<input type="text" name="officeNo" id="officeNo" class="form-control" placeholder="Office Number">
						</div>

						<div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                        </div>

						@if($dep->count()> 0)
							<div class="form-group">
								<label for="department">Department:</label>
									<select class="form-control" name="department">
										@foreach($dep as $depatee)
											<option>{{ $depatee->depart_name}}</option>
										@endforeach
									</select>
							</div>
						@endif
						<button type="submit" class="btn btn-success">Save</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection