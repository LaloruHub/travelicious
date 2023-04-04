<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates._head')
    <title>Visitados</title>
</head>

<body>

    <main class="container">

        <article class="titulo d-flex flex-column align-items-center rounded-top my-5">
            <h1>Visitado</h1>
        </article>

        @foreach ($visitados as $visitado)
            <article
                class="bg-dark destino d-flex flex-column align-items-center bg-light rounded mb-2 position-relative destino">
                <a target="_blank" href="{{ $visitado->WEB }}"
                    class="bi bi-box-arrow-up-right link align-self-end position-absolute p-2 rounded"></a>
                <a class="align-self-start position-absolute p-2 rounded link d-flex flex-row text-warning gap-1">
                    <?php
                    $resultados = [false, false, false, false, false];
                        for ($i=0; $i < $visitado->VAL ; $i++) { 
                          $resultados[$i] = true;
                        }
                    foreach($resultados as $resultado){
                      if ($resultado){ 
                    ?>
                    <i class="bi bi-star-fill"></i>
                    <?php
                      } 
                      else { ?>
                    <i class="bi bi-star"></i>
                    <?php
                      }
                    }
                    ?>
                </a>
                <img src="{{ asset('multimedia/imagenes/lugares/' . $visitado->IMG) }}" alt=""
                    class="w-100 img-fluid rounded-top">
                <section class="p-3 informacion">
                    <div class="d-flex flex-row align-items-baseline justify-content-center">
                        <h2 class="nombre-localidad">{{ $visitado->NOM }}</h2>
                        <h2><span> &nbsp;&nbsp; | &nbsp;</span></h2>
                        <h3><i>{{ $visitado->LOC }}</i></h3>
                    </div>
                    <p class="notes mt-1 ">{{ $visitado->NOTES }}</p>
                </section>
            </article>
        @endforeach

    </main>
    <nav id="menu_principal" class="bg-dark w-100 position-sticky bottom-0 text-light d-flex justify-content-around">
        <a href="{{ route('index') }}" class="bi bi-house"></a>
        <a href="{{ route('destinos') }}" class="bi bi-geo-alt"></a>
        <a href="{{ route('visitados') }}" class="bi bi-map-fill"></a>
    </nav>


</body>

</html>
