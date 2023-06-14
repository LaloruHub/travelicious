<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates._head')
    <title>Login</title>
</head>

<body class="">
    <main class="container text-light d-flex align-items-center justify-content-center">
        <h1>Login</h1>
        <form action="#" method="post" id="login-form" class="bg-dark">
            @csrf
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
            <label for="passwd">Password</label>
            <input id="passwd" name="passwd" type="password">
        </form>
    </main>

    <nav id="menu_principal" class="bg-dark position-sticky fixed-bottom text-light d-flex justify-content-around">
        <a href="{{ route('index') }}" class="bi bi-house-fill"></a>
        <a href="{{ route('destinos') }}" class="bi bi-geo-alt"></a>
        <a href="{{ route('visitados') }}" class="bi bi-map"></a>
    </nav>
</body>

</html>
