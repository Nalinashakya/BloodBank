<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="{{url('/store-event')}}">
		{{csrf_field()}}
		Name:<input type="text" name="event_name" placeholder="Enter event name"><br/>
		{{$errors->first('event_name')}}<br>
		Organized-by:<input type="text" name="event_organized_by" placeholder="Enter organization name"><br/>
		{{$errors->first('event_organized_by')}}<br>
		Venue:<input type="text" name="event_venue" placeholder="Enter venue"><br/>
		Time:<input type="text" name="event_time" placeholder="Enter time"><br/>
		{{$errors->first('event_time')}}
		<button type="submit">Submit</button>
	</form>
</
</body>
</html>

