<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>User list</h1>&nbsp
	<a href="{{route('admin.index')}}">Back</a> |<a href="{{route('add.user')}}">Create user</a>|
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>User Name</th>
			<th>Type</th>
			<th>Action</th>
			
		</tr>

		
		
		@foreach($std as $s)
		<tr>
			<td>{{ $s->id }}</td>
			<td>{{ $s->email }}</td>
			<td>{{ $s->user_name }}</td>
			<td>{{ $s->type }}</td>
			<td>
				
				<a href="{{route('admin.delete', $s->id)}}">DELETE</a>
			</td>
		</tr>
		@endforeach

	</table>


</body>
</html>