<!DOCTYPE html>
<html>
<head>
	<title>Scout Home</title>
</head>
<body>
	<h1>Welcome {{ request()->session()->get('user')->type }}! 
		{{ request()->session()->get('user')->user_name }} </h1><br>
	<a href="{{route('profile.scout',request()->session()->get('user')->id )}}">Profile</a> 
	||
	<a href="/logout">Logout</a>

</body>
</html>