<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
</head>
<body>
	<h1>Welcome {{ request()->session()->get('user')->type }}! 
		{{ request()->session()->get('user')->user_name }} </h1><br>

		<a href="{{route('profile.user',request()->session()->get('user')->id )}}">Profile</a> ||
	<a href="/logout">Logout</a>


	<h2>Posts:</h2>
	@foreach($std as $s)
		@if($s->admin_name != NULL)
	<div>{{ $s->country }}||{{ $s->city }}||{{ $s->placename }} <div><a href="{{route('user.details', $s->id)}}">View Details</a></div></div>

	@endif
@endforeach
<h3>Search</h3>

<form method="GET" action="{{ route('user.searchresult') }}">
  <label for="country">Country:</label>
  <select id="country" name="country">
    <option value="" selected="selected">Choose one</option>
  	@foreach($std->unique('country') as $s)
  		@if($s->admin_name != NULL)
      <option value="{{$s->country}}">{{$s->country}}</option>
      @endif
    @endforeach
  </select>
   <label for="city">City:</label>
  <select id="city" name="city">
    <option value="" selected="selected">Choose one</option>
  	@foreach($std->unique('city') as $s)
		@if($s->admin_name != NULL)
    <option value="{{$s->city}}">{{$s->city}}</option>
    @endif
@endforeach
  </select>
   <label for="placename">placename:</label>
  <select id="placename" name="placename">
    <option value="" selected="selected">Choose one</option>
  	@foreach($std as $s)
		@if($s->admin_name != NULL)
    <option value="{{$s->placename}}">{{$s->placename}}</option>
    @endif
@endforeach
  </select>
  <label for="cost">cost:</label>
  <select id="cost" name="cost">
    <option value="" selected="selected">Choose one</option>
    <option value="1000">1000</option>
    <option value="10000">10000</option>
    <option value="100000">100000</option>
   
  </select>
 
 
  <input type="submit">
 
</form>


</body>
</html>