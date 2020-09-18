<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="{{url('/store-donor')}}">
		{{csrf_field()}}
		Name:<input type="text" name="donor_name" placeholder="Enter donor name"><br/>
		Email:<input type="text" name="donor_email" placeholder="Enter email"><br/>
		Address:<input type="text" name="donor_address" placeholder="Enter address"><br/>
		Phone:<input type="text" name="donor_phone" placeholder="Enter phone number"><br/>
		Blood Group:<input type="text" name="donor_blood_group" placeholder="Enter blood group">
		<button type="submit">Submit</button>
	</form>
</
</body>
</html>

image vaKO c