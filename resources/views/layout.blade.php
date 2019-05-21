<!--Huvud dokumentet för hemsidan (allt går via här)-->
<!DOCTYPE html>
<html lang="en">
    <title>@yield('title', 'Portfolio')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/Portfolio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
</head>
<body>
    <!--hemsidans navigation declareras här-->
    <nav class="navbar">
        <h1 class="name">
            <b>Company<br>Name</b>
        </h1>
        <h3 class="links"><a href="/home">Home</a></h3>
        <h3 class="link"><a href="/designers">Designers</a></h3>
        <h3 class="link"><a>Clients</a></h3>
        <h3 class="link"><a>Contact</a></h3>

        <div class="loginarea">
        <a class="logintext" href="/login">Sign in/Sign up</a>
        <div class="profilepic"></div>
        </div>
    </nav>

    <div class="pagecontent">
    <!--här gör man så att sectionen content hamnar på denna sida, content kan du hitta i de andra dokumenten till exempel login.blade.php-->
        @yield('content')
    <div>
</body>
</html>