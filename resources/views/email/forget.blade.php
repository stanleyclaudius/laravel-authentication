<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h2>Hi, {{ $data['name'] }}</h2>
	<h4 style="color: #a0a0a0;">It's seem that you forget your password. Click the button to reset your password.</h4>
	<a href="http://127.0.0.1:8000/reset/{{ $data['email'] }}/{{ $data['token'] }}" target="_blank" style="text-decoration: none; padding: 10px 12px; color: #fff; border-radius: 3px; background-color: #1b6ca8;">Reset Password</a>

	<h4 style="line-height: 32px;">Thank Your, <br> Admin</h4>
	
</body>
</html>