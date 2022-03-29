<!DOCTYPE html>
<html lang="nl">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Chateau Meiland</title>
  <link rel="stylesheet" href="./css/foundation.css">
  <link rel="stylesheet" href="./css/app.css">
  <meta class="foundation-mq">
</head>

<body>

  <header class="top-bar">
    <div class="row">
      <nav class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
          <li role="menuitem"><a href="./home.html">Home</a></li>
          <li role="menuitem"><a href="./clients.html">Klanten</a></li>
          <li role="menuitem"><a href="./reservations.html">Reservaties</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="row">
    <div class="medium-12 large-12 columns">
      <h4>Nieuwe Reservatie</h4>
      <div class="medium-2  columns">Boeking voor:</div>
      <div class="medium-2  columns"><b>Mr. Herr Seele</b></div>
      <form action="" method="post">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
        <div class="medium-1  columns">Van:</div>
        <div class="medium-2  columns"><input name="dateFrom" value="" type="date" class="datepicker" /></div>
        <div class="medium-1  columns">Tot:</div>
        <div class="medium-2  columns"><input name="dateTo" value="" type="date" class="datepicker" /></div>
        <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
      </form>

      <table class="stack">
        <thead>
          <tr>
            <th width="200">Kamer</th>
            <th width="200">Beschikbaarheid</th>
            <th width="200">Actie</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>101</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>102</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>201</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>202</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
        </tbody>
      </table>
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