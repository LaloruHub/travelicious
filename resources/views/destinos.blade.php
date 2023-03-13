<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
    @include('templates._head')
    <title>Destinos</title>
    <script src="{{ asset('js/destinos.js') }}"></script>
</head>

<body>

    <main class="container d-flex flex-column gap-3">

        <article class="titulo d-flex flex-column align-items-center mt-5 rounded-top">
            <h1>Destino</h1>
        </article>

        <article class="filtros w-100 d-flex flex-row justify-content-center gap-3">
            <section>
                {{-- <form id="form_filtros" method="post" action="{{route('cambiar_filtro')}}"> --}}
                {{-- @csrf --}}
                <select name="filtros" id="filtros">
                    <option value="NOM">Nombre</option>
                    <option value="LOC">Localizacion</option>
                    <option value="PRE">Presupuesto</option>
                    <option value="DIAS_PREV">Dias previstos</option>
                    <option value="FEC_PREV" selected>Fecha prevista</option>
                </select>
                {{-- </form> --}}
            </section>
            <form method="post" action="{{ route('cambia_sesion') }}">
                @csrf
                <section class="up_down">
                    <button type="submit" class="bi bi-arrow-down-up"></button>
                </section>
            </form>
        </article>

        @foreach ($destinos as $destino)
            <article
                class="destino d-flex flex-column align-items-center bg-light rounded mb-2 position-relative destino">
                <a target="_blank" href="{{ $destino->WEB }}"
                    class="bi bi-box-arrow-up-right link align-self-end position-absolute p-2 rounded"></a>
                <a class="align-self-start position-absolute p-2 rounded link">{{ $destino->FEC_PREV }}</a>
                <img src="{{ asset('multimedia/imagenes/lugares/' . $destino->IMG) }}" alt=""
                    class="w-100 img-fluid rounded-top">
                <section class="p-3 informacion">
                    <div class="d-flex flex-row align-items-baseline justify-content-center">
                        <h2>{{ $destino->NOM }}</h2>
                        <h2><span> &nbsp;&nbsp; | &nbsp;</span></h2>
                        <h3><i>{{ $destino->LOC }}</i></h3>
                    </div>
                    <p class="notes mt-1">{{ $destino->NOTES }}</p>
                </section>
                <p class="align-self-end px-3"><span class="py-1 px-2"><b>{{ number_format($destino->PRE / $destino->DIAS_PREV,2) }}€</b>
                        noche</span></p>
                <p class="align-self-end px-3"><b>Total</b> para <b>{{ $destino->DIAS_PREV }}</b> noches <span
                        class="boton_fecha rounded py-1 px-2">{{ $destino->PRE }}€</span></p>
            </article>
        @endforeach

    </main>
    <nav id="menu_principal" class="bg-dark w-100 fixed-bottom text-light d-flex justify-content-around">
        <a href="{{ route('index') }}" class="bi bi-house"></a>
        <a href="{{ route('destinos') }}" class="bi bi-geo-alt-fill"></a>
        <a href="{{ route('visitados') }}" class="bi bi-map"></a>
    </nav>



</body>

</html>
