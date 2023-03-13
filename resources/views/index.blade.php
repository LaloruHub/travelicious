<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates._head')
    <title>Inicio</title>
</head>

<body></body>

<main class="container">
    <section id="titulo_principal" class="relleno d-flex flex-column align-items-center px-5 mt-5 pt-5">
        <h1>Travelicious</h1>
        <hr class="text-dark">
        <p>
            Esta es una página web personalizada para compartir información y planes de viaje entre Elia y Gonzalo.
        </p>
    </section>
</main>

<nav id="menu_principal" class="bg-dark position-sticky fixed-bottom text-light d-flex justify-content-around">
    <a href="{{ route('index') }}" class="bi bi-house-fill"></a>
    <a href="{{ route('destinos') }}" class="bi bi-geo-alt"></a>
    <a href="{{ route('visitados') }}" class="bi bi-map"></a>
</nav>

</body>

</html>
