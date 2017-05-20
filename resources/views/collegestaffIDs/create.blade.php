@extends('layouts.master')

@section('title', 'Staff Ids')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Staff Ids registers at {{ $col->col_name}}</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('colleges/'.$col->id.'/collegestaffIDs/create') }}">

						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('staffid') ? ' has-error' : '' }}">
                            <label for="staffid" class="col-md-4 control-label">Staff ID</label>

                            <div class="col-md-6">
                                <input id="staffid" type="text" class="form-control" name="staffid" value="{{ old('staffid') }}" required autofocus>

                                @if ($errors->has('staffid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('staffid') }}</strong>
                                    </span>
                                @endif
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