<div class="well-searchbox">
    <form action="{{ url('search') }}" method="GET" role="form">
    <div class="input-group input-group-lg">
        <input autofocus class="typeahead form-control" autocomplete="on" name="q"
               placeholder="University, Transports,"
               type="text" value="{{ isset($_GET['q']) ? $_GET['q'] : '' }}">
        <span class="input-group-btn">
			<button class="btn btn-info btn-lg" type="submit">Search</button>
		</span>
    </div>
</form>
 </div>
