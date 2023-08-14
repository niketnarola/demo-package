<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Contact Us</h1>
	<form method="post" route="{{'contact'}}">
		@csrf
		<div>
			<input type="text" name="name" placeholder="Your name">
		</div>
		<div>
			<input type="email" name="email" placeholder="Your email">
		</div>
		<div>
			<textarea name="message" placeholder="Your message"></textarea>
		</div>
		<input type="submit">
	</form>
</body>
</html>