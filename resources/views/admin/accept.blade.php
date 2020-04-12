<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>	

	<h1>Edit Page!</h1>&nbsp
	<a href="{{route('admin.requests')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table border="0">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" readonly value="{{ $std->id }}"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="country" value="{{ $std->country }}"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="{{ $std->city }}"></td>
		</tr>
		<tr>
			<td>Place Name</td>
			<td><input type="text" name="placename" value="{{ $std->placename }}"></td>
		</tr>
		<tr>
			<td>Cost</td>
			<td><input type="text" name="cost" value="{{ $std->cost }}"></td>
		</tr>
		<tr>
			<td>Travel Medium</td>
			<td><input type="text" name="travelmedium" value="{{ $std->travelmedium }}"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="description" value="{{ $std->description }}"></td>
		</tr>
		<tr>
			<td>Scout Name</td>
			<td><input type="text" name="scout_name" value="{{ $std->scout_name }}"></td>
		</tr>
		<tr>
			<td>Added by</td>
			@if($std->admin_name == NULL)

			<td><input type="text" name="admin_name" value="{{ request()->session()->get('user')->user_name }}"></td>
			@else
			<td><input type="text" name="admin_name" value="{{ $std->admin_name }}"></td>
			@endif
		</tr>
		<tr>
			<td colspan="2"> <input type="submit" name="submit"></td>
		
		</tr>
	</table>
</form>
</body>
</html>