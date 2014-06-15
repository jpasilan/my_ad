<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{ Lang::get('emails.my_ad_pass_reset') }}</h2>

<?php $link = URL::to('password/reset', [$resetCode]) ?>
<p>{{ Lang::get('emails.reset_pass_request') }}: <a href="{{ $link }}">{{ $link }}</a>.</p>
</body>
</html>