@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">

        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('message'))
	<div class="alert alert-success">
		{{session('message')}}
	</div>
@endif