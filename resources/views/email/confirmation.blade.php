<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>

	<h2>Hi, {{ $data['name'] }}</h2>
	<h3 style="color: #a0a0a0;">Here is your verification code to verify your account</h3>
	<p style="font-size: 30px; letter-spacing: 2px;"><b>{{ $data['token'] }}</b></p>
	<h3>Thank You, <br> Admin</h3>
	
</body>
</html>