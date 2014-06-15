<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>{{ Lang::get('emails.pass_reset') }}</h2>

		<div>
			{{ Lang::get('emails.reset_pass_form') }}: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>
