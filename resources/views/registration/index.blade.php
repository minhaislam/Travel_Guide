<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Registration Page</h1>
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
	<form method="post">
		<!-- @csrf -->
		<!--{{ csrf_field()}} -->	
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Email: <input type="text" name="email" value="{{old('email')}}" > <br>
		@foreach ($errors->get('email') as $message) 
		<div>{{$message}}</div>
		@endforeach
		Username: <input type="text" name="user_name" value="{{old('user_name')}}" > <br>
		@if($errors->has('user_name')) 
		<div>{{$errors->first('user_name')}}</div>
		@endif
		Password: <input type="password" name="password" value="{{old('password')}}" ><br>
		@if($errors->has('password')) 
		<div>{{$errors->first('password')}}</div>
		@endif
		type:<br> <input type="radio" name="type"  value="admin" >Admin||<input type="radio" name="type" value="scout" >Scout||<input type="radio" name="type" value="user" >General User <br>
		<input type="submit" name="submit" value="Submit" >
	</form>
	<a href="/">back</a>
	<h3>{{session('msg')}}</h3>

	
</body>
</html>