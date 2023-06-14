<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates._head')
    <title>Inicio</title>
</head>

<body></body>

<main class="container ">
    <a href="{{ route('login') }}" class="btn btn-dark rounded-2 txt-grey">Login</a>
    <section id="titulo_principal" class="bg-dark rounded-3 d-flex flex-column align-items-center px-5 mt-5 py-3">
        <h1>Travelicious</h1>
        <hr class="text-dark">
        <p class="txt-grey">
            ¡Bienvenidos a Travelicious, el lugar donde hacemos realidad nuestros viajes más espectaculares! Esta página
            web ha sido personalizada especialmente para nosotros, Elia y Gonzalo, para compartir información y planes
            de viaje entre nosotros y hacer realidad nuestras aventuras juntos.
            <br>
            <br>
            Aquí en Travelicious, encontrarás todo lo necesario para planificar nuestro próximo viaje, desde los
            destinos más exóticos y emocionantes, hasta los rincones más escondidos y románticos. Podrás encontrar
            sugerencias de alojamiento, actividades emocionantes y lugares para relajarse y disfrutar del paisaje.
            <br>
            <br>
            Así que, si estás listo para embarcarte en una nueva aventura conmigo, no busquemos más allá de
            Travelicious. ¡Estamos aquí para hacer que cada viaje sea inolvidable juntos!
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
