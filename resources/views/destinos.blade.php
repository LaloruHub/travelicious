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
            <form action="{{ route('visitado') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $destino->ID }}">
                <input type="hidden" name="nom" value="{{ $destino->NOM }}">
                <input type="hidden" name="loc" value="{{ $destino->LOC }}">
                <input type="hidden" name="web" value="{{ $destino->WEB }}">
                <input type="hidden" name="hot_apar" value="{{ $destino->HOT_APAR }}">
                <input type="hidden" name="img" value="{{ $destino->IMG }}">
                <input type="hidden" name="notes" value="{{ $destino->NOTES }}">
                <input type="hidden" name="fec_prev" value="{{ $destino->FEC_PREV }}">
                <input type="hidden" name="pre" value="{{ $destino->PRE }}">
                <input type="hidden" name="dias_prev" value="{{ $destino->DIAS_PREV }}">
                <input type="hidden" name="destino_id" value="{{ $destino->id }}">
                <article
                    class="destino bg-dark  d-flex flex-column align-items-center bg-light rounded mb-2 position-relative destino">
                    <a target="_blank" href="{{ $destino->WEB }}"
                        class="bi bi-box-arrow-up-right link align-self-end position-absolute p-2 rounded"></a>
                    <a class="align-self-start position-absolute p-2 rounded link">{{ $destino->FEC_PREV }}</a>
                    <img src="{{ asset('multimedia/imagenes/lugares/' . $destino->IMG) }}" alt=""
                        class="w-100 img-fluid rounded-top">
                    <section class="p-3 informacion ">
                        <div class="d-flex flex-row align-items-baseline justify-content-center">
                            <h2 class="nombre-localidad ">{{ $destino->NOM }}</h2>
                            <h2><span> &nbsp;&nbsp; | &nbsp;</span></h2>
                            <h3><i>{{ $destino->LOC }}</i></h3>
                        </div>
                        <p class="txt-grey notes mt-1">{{ $destino->NOTES }}</p>
                    </section>
                    <p class="txt-grey align-self-end px-3"><span
                            class=""><b>{{ number_format($destino->PRE / $destino->DIAS_PREV, 2) }}€</b>
                            noche</span>
                    </p>
                    <p class="txt-grey align-self-end px-3"><b>Total</b> para <b>{{ $destino->DIAS_PREV }}</b> noches
                        <span class="boton_fecha rounded py-1 px-2">{{ $destino->PRE }}€</span>
                    </p>
                    <button class="visitado align-self-end rounded-bottom w-100 ">¿VISITADO?</button>
                </article>
            </form>
        @endforeach

    </main>
    <nav id="menu_principal" class="bg-dark w-100 fixed-bottom text-light d-flex justify-content-around">
        <a href="{{ route('index') }}" class="bi bi-house"></a>
        <a href="{{ route('destinos') }}" class="bi bi-geo-alt-fill"></a>
        <a href="{{ route('visitados') }}" class="bi bi-map"></a>
    </nav>



</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
