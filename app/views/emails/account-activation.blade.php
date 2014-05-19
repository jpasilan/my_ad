<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>My-Ad Account Registration</h2>

<?php $link = URL::to('confirm', [$activationCode]) ?>
<p>To activate your account, follow this link: <a href="{{ $link }}">{{ $link }}</a>.</p>
</body>
</html>