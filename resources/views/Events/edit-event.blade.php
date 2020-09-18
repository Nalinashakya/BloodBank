<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="{{url('/update-event/'.$event->id)}}">
		{{csrf_field()}}
		Name:<input type="text" name="event_name" value="{{$event->name}}" placeholder="Enter event name"><br/>
		Organized-by:<input type="text" name="event_organized_by" value="{{$event->Organized-by}}" placeholder="Enter organization name"><br/>
		Venue:<input type="text" name="event_venue" value="{{$event->venue}}" placeholder="Enter venue"><br/>
		Time:<input type="text" name="event_time" value="{{$event-time}}" placeholder="Enter time"><br/>
		<button type="submit">Submit</button>
	</form>
</
</body>
</html>