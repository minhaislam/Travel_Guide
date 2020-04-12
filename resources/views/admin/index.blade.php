<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Welcome {{ request()->session()->get('user')->type }}! 
		{{ request()->session()->get('user')->user_name }}</h1><br>
	
	<a href="{{route('profile.admin',request()->session()->get('user')->id )}}">Profile</a> 
	||<a href="{{route('home.list')}}">View Users</a>||<a href="{{route('admin.requests')}}">Posts</a>||<a href="/logout">Logout</a>

</body>
</html>