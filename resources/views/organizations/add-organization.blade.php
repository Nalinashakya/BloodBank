<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="{{url('/store-organization')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		Name:<input type="text" name="org_name" placeholder="Enter organization name"><br/>
		Email:<input type="text" name="org_email" placeholder="Enter email"><br/>
		Address:<input type="text" name="org_address" placeholder="Enter address"><br/>
		Phone:<input type="text" name="org_phone" placeholder="Enter phone number"><br/>
		Manager:<input type="text" name="org_manager" placeholder="Enter manager name"><br>
		Image:<input type="file" name="image" placeholder="choose file"><br>
		{{$errors->first('image')}}<br>


		<button type="submit">Submit</button>
	</form>
</body>
</html>

