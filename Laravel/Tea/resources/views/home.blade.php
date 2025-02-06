<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Modify css in public/css/style.css, not in css/app.css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Home</title>
</head>
<body>

    <div class="view">
        <ul>
            <a href="{{ route('password.request') }}" class="btn"> Forgot Password? </a>
            <a href="{{ route('login') }}" class="btn"> Login </a>
            <a href="{{ route('register') }}" class="btn"> Register </a>
            <a href="">
        </ul>
    </div>

</body>
</html>
