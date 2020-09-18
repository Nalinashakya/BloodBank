<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="{{url('/update-donor/'.$donor->id)}}">
		{{csrf_field()}}
		Name:<input type="text" name="donor_name" value="{{$donor->name}}" placeholder="Enter donor name"><br/>
		Email:<input type="text" name="donor_email" value="{{$donor->email}}" placeholder="Enter email"><br/>
		Address:<input type="text" name="donor_address" value="{{$donor->address}}" placeholder="Enter address"><br/>
		Phone:<input type="text" name="donor_phone" value="{{$donor->phone}}" placeholder="Enter phone number"><br/>
		Blood group:<input type="text" name="donor_blood_group" value="{{$donor->bloodgroup}}" placeholder="Enter bloodgroup">
		<button type="submit">Submit</button>
	</form>
</
</body>
</html>