<!DOCTYPE html>
<html>
<head>
	<title>
		Event view
	</title>
</head>
<body>
	<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">organized_by</th>
      <th scope="col">venue</th>
      <th scope="col">time</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($event as $events)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$events->name}}</td>
      <td>{{$events->organized_by}}</td>
      <td>{{$events->venue}}</td>
      <td>{{$events->time}}</td>
      <td><a href="{{url('/delete-event/'.$events->id)}}">Delete</a>
      	<a href="{{url('/edit-event/'.$events->id)}}">Edit</a>
    </tr>
    @endforeach
   
  </tbody>
</table>



</body>
</html>
