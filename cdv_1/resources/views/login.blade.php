<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login" method="post">
        {{csrf_field()}}
        Login: <input type="text" name="user">
        Password: <input type="text" name="password">
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>