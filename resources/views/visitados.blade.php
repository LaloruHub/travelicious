<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates._head')
  <title>Visitados</title>
</head>
<body>
  
  <main class="container">
    <section id="titulo_principal" class="relleno d-flex justify-content-center align-items-center mt-5 pt-5">
      <h1>Visitados</h1>
    </section>
  </main>
  <nav id="menu_principal" class="bg-dark w-100 position-sticky bottom-0 text-light d-flex justify-content-around">
    <a href="{{ route('index') }}" class="bi bi-house"></a>
    <a href="{{ route('destinos') }}" class="bi bi-geo-alt"></a>
    <a href="{{ route('visitados') }}" class="bi bi-map-fill"></a>
  </nav>

  
</body>
</html>