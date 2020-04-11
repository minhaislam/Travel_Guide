<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Welcome Admin!{{session('user_name')}} </h1><br>
	<a href="{{route('profile.admin')}}">Profile</a>||<a href="{{route('home.list')}}">View Users</a>||<a href="/logout">Logout</a>

</body>
</html>