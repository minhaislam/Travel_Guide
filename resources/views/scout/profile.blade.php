<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Profile!</h1>&nbsp
	<a href="{{route('scout.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{ $std->id }}</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td>{{$std->user_name}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$std->email}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$std->password}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$std->type}}</td>
		</tr>
		<tr>
			<td></td>
			<td><a href="{{route('profile1.edit',request()->session()->get('user')->id )}}">Edit</a></td>
		</tr>
	</table>

</body>
</html>