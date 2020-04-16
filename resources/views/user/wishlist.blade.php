<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Wishlist!</h1>&nbsp
	<a href="{{route('user.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		@foreach($wishlist as $list)
		<tr>
			
			
			<th>country</th>
			<th>city</th>
			<th>placename</th>
			
			
			<th>Action</th>
			
		
		</tr>
		@break
			@endforeach
		@foreach($wishlist as $list)
		<tr>
	
			
			
			<td>{{$list->country}}</td>
			<td>{{$list->city}}</td>
			<td>{{$list->placename}}</td>
			
			
			<td>
				
				<a href="{{route('user.details', $list->id)}}">viewdetails</a>||<button><a href="{{url('user/deletewish/'.$list->id.'/'.request()->session()->get('user')->id)}}">Delete from wishlist</a></button>
			</td>
			
			
			
		</tr>
		@endforeach

	</table>

	

</body>
</html>