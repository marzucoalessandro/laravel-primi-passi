<!-- Le istruzioni: -->
<!-- Creiamo un layout base da estendere in due pagine del nostro sito.
Nel layout includiamo un header e un footer -->

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
          <a href="'scettico'">Scettici</a>
          <a href="incazzato">Incazzati</a>
        </nav>
        <hr>
      </header>
      <main>
        <h1>.....e alla fine arrivò Mariuccio.....</h1>


        <div class="section_2">
          <h2>prima di clikkare sui link vediamo se li indovini tutti....</h2>
        </div>

      </main>
      <footer>
        <div class="end">
          <h4>Copyright pincopallo</h4>
        </div>
      </footer>
    </body>
    </html>
