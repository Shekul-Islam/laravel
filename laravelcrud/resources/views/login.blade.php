<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrates you are logged in </p>
    <form action="/logout" method="POST">
    @csrf
    <button>Log out</button>
    </form>
    @else

    <div style="border: 2px solid black">

        <h2>Login Form</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name"><br>
            <input name="loginpassword" type="text" placeholder="password"><br>
            <button>Log in</button>
        </form>

    </div>
    @endauth
</body>
</html>
