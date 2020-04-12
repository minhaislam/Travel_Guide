<!DOCTYPE html>
<html>
<head>
	<title>Scout Home</title>
</head>
<body>
	<h1>Welcome {{ request()->session()->get('user')->type }}! 
		{{ request()->session()->get('user')->user_name }} </h1><br>
	<h1>{{request()->session()->get('message')}}</h1>

	<a href="{{route('profile.scout',request()->session()->get('user')->id )}}">Profile</a> 
	||<a href="{{route('scout.addinfo')}}">Add Information</a> 
	||
	<a href="/logout">Logout</a>

</body>
</html>