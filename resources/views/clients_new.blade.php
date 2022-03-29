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
      <h4>Nieuwe klant</h4>
      <form action="/clients/new" method="post">
        <div class="medium-4  columns">
          <label>Titel</label>
          <select name="form[title]">
            <option value="mr" selected="selected">Mr.</option>
            <option value="ms">Mw.</option>
            <option value="mrs">Juf.</option>
            <option value="dr">Dr.</option>
          </select>
        </div>
        <div class="medium-4  columns">
          <label>Voornaam</label>
          <input name="form[name]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Achternaam</label>
          <input name="form[lastName]" type="text">
        </div>
        <div class="medium-8  columns">
          <label>Adres</label>
          <input name="form[address]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Postcode</label>
          <input name="form[zipCode]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Stad</label>
          <input name="form[city]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Provincie</label>
          <input name="form[provincie]" type="text">
        </div>
        <div class="medium-12  columns">
          <label>E-mail</label>
          <input name="form[email]" type="text">
        </div>
        <div class="medium-12  columns">
          <input value="BEWAAR" class="button success hollow" type="submit">
        </div>
      </form>
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