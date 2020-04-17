<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> 
	<h1>User Registration</h1>
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
	<form method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		Email: <input type="text" name="email" > <br>
		User Name: <input type="text" name="user_name" > <br>
		Password: <input type="password" name="password" ><br>
		type:<br> <input type="radio" name="type" value="admin" >Admin||<input type="radio" name="type" value="scout" >Scout||<input type="radio" name="type" value="user" >General User <br>

		<input type="submit" name="submit" value="Submit" >

	</form>



</body>
</html>