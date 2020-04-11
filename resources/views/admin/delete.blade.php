<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>	

	<h1>Delete Page!</h1>&nbsp
	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<h1>Are you sure?</h1>
	
	<table border="0">
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{ $std->email }}"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="user_name" value="{{ $std->user_name }}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="{{ $std->password }}"></td>
		</tr>
		<tr>
			<td>type</td>
			<td><input type="text" name="type" value="{{ $std->type }}"></td>
		</tr>
		
			
		
		
	</table>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		ID:<input type="text" name="id" readonly value="{{ $std->id }}"><br>
		 <input type="submit" name="delete">

</form>
</body>
</html>