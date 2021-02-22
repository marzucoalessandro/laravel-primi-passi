<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primi-passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



    </head>
    <body>
      <!-- costruisco un semplice header con navbar, un main e un footer -->
      <header>
        <nav>
          <a href="/">Home</a>
          <a href="entusiasta">Entusiasti</a>
          <a href="scettico">Scettici</a>
          <a href="incazzato">Incazzati</a>
        </nav>
        <hr>
      </header>
      @yield('content')
      <footer>
        <div class="end">
          <h4>Copyright pincopallo</h4>
        </div>
      </footer>
    </body>
    </html>
