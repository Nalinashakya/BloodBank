<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="{{url('/update-organization/'.$org->id)}}"enctype="multipart/form-data">
		{{csrf_field()}}
		Name:<input type="text" name="org_name" value="{{$org->name}}" placeholder="Enter organization name"><br/>
		Email:<input type="text" name="org_email" value="{{$org->email}}" placeholder="Enter email"><br/>
		Address:<input type="text" name="org_address" value="{{$org->address}}" placeholder="Enter address"><br/>
		Phone:<input type="text" name="org_phone" value="{{$org->phone}}" placeholder="Enter phone number"><br/>
		Manager:<input type="text" name="org_manager" value="{{$org->manager}}" placeholder="Enter manager name"><br/>
		Image:<input type="file" name="image" placeholder="choose file"><br>
		<button type="submit">Submit</button>
	</form>
</
</body>
</html> 

