
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="post" action="{{ route("login") }}">
        @csrf
        <input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>
</body>
</html>
