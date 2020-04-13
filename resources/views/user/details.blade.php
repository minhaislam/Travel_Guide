<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('user.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>country</th>
			<th>city</th>
			<th>placename</th>
			<th>cost</th>
			<th>travelmedium</th>
			<th>description</th>
			
			<th>Action</th>
			
		</tr>
	
		<tr>

			<td>{{ $s->id }}</td>
			<td>{{ $s->country }}</td>
			<td>{{ $s->city }}</td>
			<td>{{ $s->placename }}</td>
			<td>{{ $s->cost }}</td>
			<td>{{ $s->travelmedium }}</td>
			<td>{{ $s->description }}</td>
			
			<td>
				
				<a href="">Book</a>
			</td>
		</tr>
		

	</table>

</body>
</html>