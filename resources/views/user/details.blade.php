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
			
			<th>country</th>
			<th>city</th>
			<th>placename</th>
			<th>cost</th>
			<th>travelmedium</th>
			<th>description</th>
			
			<th>Action</th>
			@foreach($std as $st)
			@if($st->place_id == $s->id )
			<th>Comment</th>
			@endif
			@endforeach
		</tr>
	
		<tr>

			
			<td>{{ $s->country }}</td>
			<td>{{ $s->city }}</td>
			<td>{{ $s->placename }}</td>
			<td>{{ $s->cost }}</td>
			<td>{{ $s->travelmedium }}</td>
			<td>{{ $s->description }}</td>
			
			<td>
				
				<a href="">Book</a>
			</td>
			@foreach($std as $st)
			@if($st->place_id == $s->id )
			<th>{{$st->comment}}</th>
			@endif
			@endforeach
		</tr>
		

	</table>

	<form method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
			<tr>
				<td>
					<div>Place a comment:</div>
					<input type="text" name='commentator_id' value="{{request()->session()->get('user')->id}}">
					
				</td>
				
			</tr>
			<tr>
				<td>
					<textarea name='comment' rows="5" cols="20">						
					</textarea>
				</td>				
			</tr>
			<tr>
				<td>
					<input type="text" name="place_id" value="{{$s->id}}">
				</td>				
			</tr>
			<tr>
				<td>
					<input type="submit" name="post">
				</td>				
			</tr>


		</table>
	</form>

</body>
</html>