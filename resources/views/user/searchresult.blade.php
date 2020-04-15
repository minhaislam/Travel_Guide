<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Search Result!</h1>&nbsp
	<a href="{{route('user.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<h2>Posts:</h2>
	@foreach($result as $s)
		@if($s->admin_name != NULL)
	<div>{{ $s->country }}||{{ $s->city }}||{{ $s->placename }} <div><a href="{{route('user.details', $s->id)}}">View Details</a></div></div>

	@endif
@endforeach
<h3>Search</h3>

</body>
</html>