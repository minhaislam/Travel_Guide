<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>	

	<h1>Checklist Page!</h1>&nbsp
	<a href="{{route('user.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	
	<table border="0">
		<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<tr>
			<td>Country</td>
			<td><input type="text" name="country" value="{{$country}}"></td>
		</tr>
		<tr>
			<td>city</td>
			<td><input type="text" name="city" value="{{$city}} "></td>
		</tr>
		<tr>
			<td>Place Name</td>
			<td><input type="text" name="placename" value="{{$placename}}"></td>
		</tr>
		
		<tr>
			<td>cost</td>
			<td><input type="text" name="cost" value="{{$cost}} "></td>
		</tr>
		
		<tr>
			<td hidden="">ID</td>
			<td><input type="text" name="place_id" hidden="" readonly value="{{$id}}"></td>
		</tr>
		<tr>
			<td hidden="">Checklisted by</td>
			<td><input type="text" name="checked_by" hidden="" readonly value="{{request()->session()->get('user')->id}}"></td>
		</tr>

		<tr>
			<td colspan="2"> <input type="submit" name="checklist" value="Add to wishlist"></td>
		
		</tr>
	</table>
</form>
</body>
</html>