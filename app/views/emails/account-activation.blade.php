<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>My-Ad Account Registration</h2>

<p>To activate your account, follow this link: {{ URL::to('confirm', array($activationCode)) }}.</p>
</body>
</html>