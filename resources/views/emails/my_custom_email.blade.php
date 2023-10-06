<!DOCTYPE html>
<html>
<head>
    <title>Can-avid</title>
</head>
<body>
    <h1>Set Your Password</h1>
    <p>Please click the button below to set your password.</p>
    <a href="{{ route('password.reset', ['token' => $token]) }}">Set Password</a>
</body>
</html>