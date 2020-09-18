<!DOCTYPE html>
<html>
<head>
	<title>
		Organixzation view
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
      <th scope="col">manager</th>

      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($organization as $org)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$org->name}}</td>
      <td>{{$org->address}}</td>
      <td>{{$org->email}}</td>
      <td>{{$org->phone}}</td>
      <td>{{$org->manager}}</td>
      <td><img src="{{url('upload/'.$org->image)}}" style="height: 100px; width: 100px;"></td>
      <td><a href="{{url('/delete-organization/'.$org->id)}}">Delete</a>
      	<a href="{{url('/edit-organization/'.$org->id)}}">Edit</a>
    </tr>
    @endforeach
   
  </tbody>
</table>

bujyo?public hatauda aako hai ho

yedi localhost ma run garayeko vaye public rakhnu pathyo
aba k gara vane

image ko error dekhaune rakha ani kunai pdf upload gara
test ko lagi
karakhne agi ko jastai?
yes

</body>
</html>