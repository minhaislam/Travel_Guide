<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

	<a href="{{route('scout.index')}}">Back</a> |
	<a href="/logout">Logout</a> 
	<h1>User Registration</h1>
	<form method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		Country Name: <input type="text" name="country" > <br>
		City: <input type="text" name="city" > <br>
		Place Name: <input type="text" name="placename" > <br>
		Cost: <input type="text" name="cost" > <br>
		Travel Medium: <input type="text" name="travelmedium" > <br>
		
		Short History:<br><textarea rows = "5" cols = "50" name = "description">
            
         </textarea>
<br>
Scout Name: <input type="text" name="scout_name" value="{{request()->session()->get('user')->user_name}}" > <br>

		<input type="submit" name="submit" value="Submit" >

	</form>



</body>
</html>