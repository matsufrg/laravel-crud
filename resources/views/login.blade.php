<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="wnwmQ3y3jktFnIRdTzOOKeJu2O7g0enTqWJF80JU">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <style>
    body {
    margin: 0;
    padding: 0;
}

a, p, b, strong {
    font-family: "Times New Roman", Times, serif;
    font-size: 18px;
}

.container {
    width: 100%;
    max-width: 1440px;
    height: 100%;
    margin: auto;
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    align-content: center;
    -webkit-box-shadow: 10px 10px 136px 5px rgba(207,205,207,1);
    -moz-box-shadow: 10px 10px 136px 5px rgba(207,205,207,1);
    box-shadow: 10px 10px 136px 5px rgba(207,205,207,1);
}

.loginWrapper {
    background-color: #f8eded;
    width: 25%;
    margin: auto;
    padding: 50px 30px 50px 30px;
    -webkit-box-shadow: 7px 6px 109px -85px rgba(0,0,0,1);
    -moz-box-shadow: 7px 6px 109px -85px rgba(0,0,0,1);
    box-shadow: 7px 6px 109px -85px rgba(0,0,0,1);
}

.form-style {
    padding: 5px;
    width: 100%;
}

.login, .menu {
    width: 100%;
    display: flex;
    margin: auto;
}

.menu a {
    color: #1C1C1C;
    width: 50%;
    text-decoration: none;
    margin-bottom: 10px;
}

.menu li {
    background-color: white;
    border-right: 1px solid white;
    border-left: 1px solid white;
    text-align: center;
    padding: 10px;
    list-style: none;
}

.active {
    background-color: #e6e6e6 !important; 
}

.menu li:hover {
   opacity: 0.7;
}

form input {
    margin-top: 10px;
    margin-bottom: 15px;
}

.login .btn-submit {
    padding: 10px 20px 10px 20px;
    border: 0;
    cursor: pointer;
    margin-top: 5px;
    border-radius: 10px;
    transition-timing-function: ease-in-out;
    transition-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
}

.login .btn-submit:hover {
    border-radius: 20px;
}
    </style>
    </head>
    <body>
    <div class="container">
            <div class="loginWrapper">
                <div class="menu">
                    <a href="/users/login"><li class="active">Login</li></a>
                    <a href="/users/register"><li>Registro</li></a>
                </div>
                <div class="login">
                    <form action="{{ route('login') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-style" name="email">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-style" name="password">
                        <input type="submit" class="btn-submit" value="Entrar">
                        @if (!empty($message))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
            <br>
            </div>
        </div>
    </body>
</html>