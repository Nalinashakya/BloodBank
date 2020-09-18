<!DOCTYPE html>
<html>
<head>
	<title>
		Donor view
	</title>
</head>
<body>
	<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">bloodgroup</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($donor as $donors)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$donors->name}}</td>
      <td>{{$donors->address}}</td>
      <td>{{$donors->email}}</td>
      <td>{{$donors->phone}}</td>
      <td>{{$donors->bloodgroup}}</td>
      <td><a href="{{url('/delete-donor/'.$donors->id)}}">Delete</a>
      	<a href="{{url('/edit-donor/'.$donors->id)}}">Edit</a>
    </tr>
    @endforeach
   
  </tbody>
</table>



</body>
</html>
