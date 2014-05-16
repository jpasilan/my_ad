<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>My-Ad Password Reset</h2>

<?php $link = URL::to('password/reset', [$resetCode]) ?>
<p>You have requested a password reset. To continue, please follow this link: <a href="{{ $link }}">{{ $link }}</a>.</p>
</body>
</html>