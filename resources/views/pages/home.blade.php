<!DOCTYPE html>
<html lang="nl">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Chateau Meiland</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <meta class="foundation-mq">
</head>

<body>

  <header class="top-bar">
    <div class="row">
      <nav class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
          <li role="menuitem"><a href="./welcome">Home</a></li>
          <li role="menuitem"><a href="./clients">Klanten</a></li>
          <li role="menuitem"><a href="./reservations">Reservaties</a></li>
        </ul>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </nav>

    </div>
  </header>



  <main class="row">
    <div class="medium-12 text-center">
      <h4>Chateau Meiland</h4>
    </div>
    <div class="medium-6 columns">
      <img class="thumbnail" src="images/chateau.jpeg">
    </div>
    <div class="medium-6 large-5 columns">
      <article>
        <p>Wij, de familie Meiland / Renkema, beginnen in februari 2019 aan het nieuwe avontuur in het dorpje Beynac,
          acht
          km van de porseleinstad Limoges. Misschien kent u ons van het programma '' Ik Vertrek '' waar we in 2006
          werden
          gevolgd tijdens de renovatie van en later het runnen van een B&B in het kasteel.</p>
        <p>>Na enkele jaren te hebben gezocht vonden wij dit prachtige familie landgoed. De centrale ligging en de rust
          om
          het kasteel was precies waar we naar op zoek waren.</p>
      </article>
    </div>
  </main>

  <footer class="row column">
    <hr>
    <ul class="menu">
      <li class="float-right">Copyright 2022 - Arteveldehogeschool Gent - Web Development 2</li>
    </ul>
  </footer>

</body>

</html>
