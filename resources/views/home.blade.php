<!-- Le istruzioni: -->
<!-- Creiamo un layout base da estendere in due pagine del nostro sito.
Nel layout includiamo un header e un footer -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
          nav{
            display: flex;
            justify-content: flex-end;
          }
          nav a {
            margin: 10px 30px;
            font-size: 1rem;
            text-decoration: none;
            border: 1px solid black;
            border-radius: 5px;
            padding: 5px 10px;
            text-transform: capitalize;
            font-weight: bold;
            color: black;
            background-color: lightblue;
          }
        </style>
    </head>
    <body>
      <!-- costruisco un semplice header con navbar, un main e un footer -->
      <header>
        <nav>
          @foreach ($icon as $key)
            <a href="#">{{$key}}</a>
          @endforeach
        </nav>
      </header>
    </body>
    </html>
