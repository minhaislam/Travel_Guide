<!DOCTYPE html>
<html>
<head>
	<title>Scout Home</title>
</head>
<body>
	<h1>Welcome Scout!{{session('user_name')}}:{{session('id')}} </h1><br>
	<a href="{{route('profile.scout',session('id'))}}">Profile</a>||
	<a href="/logout">Logout</a>

</body>
</html>