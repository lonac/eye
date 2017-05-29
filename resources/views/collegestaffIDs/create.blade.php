@extends('layouts.master')

@section('title', 'Staff Ids')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{ $col->college}} Staff Ids and Roles registers:</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/collegestaffIDs/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('staffid') ? ' has-error' : '' }}">
                            <label for="staffid" class="col-md-2 control-label">Staff ID</label>

                            <div class="col-md-4">
                                <input id="staffids" type="text" class="form-control" name="staffids" value="{{ old('staffid') }}" required autofocus>

                                @if ($errors->has('staffid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('staffid') }}</strong>
                                    </span>
                                @endif
                            </div>
                         </div>      
                            <div class="form-group">
							<label for="Role" class="col-md-1 control-label">Role:</label>
							<div class="col-md-4">
								<select class="form-control" name="role">
									<option value="lecturer">Lecturer</option>
									<option value="sysadmn">Administrator</option>
									<option value="bursar">Bursar</option>
									<option value="stdean">Dean</option>
									<option value="cafe_manager">Cafe Manager</option>
								</select>
							</div>
						</div>      
                        
						<button type="submit" class="btn btn-success">ADD</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection