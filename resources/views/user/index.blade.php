<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
</head>
<body>
	<h1>Welcome {{ request()->session()->get('user')->type }}! 
		{{ request()->session()->get('user')->user_name }} </h1><br>

		<a href="{{route('profile.user',request()->session()->get('user')->id )}}">Profile</a> ||
	<a href="/logout">Logout</a>


	<h2>Posts:</h2>
	@foreach($std as $s)
		@if($s->admin_name != NULL)
	<div>{{ $s->country }}||{{ $s->city }}||{{ $s->placename }} <div><a href="{{route('user.details', $s->id)}}">View Details</a></div></div>

	@endif
@endforeach


</body>
</html>