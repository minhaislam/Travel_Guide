<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Registration Page</h1>
	<form method="post">
		<!-- @csrf -->
		<!--{{ csrf_field()}} -->	
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Email: <input type="text" name="email" > <br>
		Username: <input type="text" name="user_name" > <br>
		Password: <input type="password" name="password" ><br>
		type:<br> <input type="radio" name="type" value="admin" >Admin||<input type="radio" name="type" value="scout" >Scout||<input type="radio" name="type" value="user" >General User <br>
		<input type="submit" name="submit" value="Submit" >
	</form>
	<a href="/">back</a>
	<h3>{{session('msg')}}</h3>
</body>
</html>