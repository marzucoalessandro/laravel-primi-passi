<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primi-passi</title>

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
          h1{
            font-size: 3rem;
            text-align: center;
            margin-bottom: 50px;
          }
          .end{
            height: 50px;
            background-color: blue;
            text-align: center;
            line-height: 50px;
          }
          h4{
            color: white;
          }
          img{
            height: 200px;
            width: 200px
          }
          .section_1{
            display: flex;
            justify-content: space-around;
          }
          .section_1 a{
            text-decoration: none;
            font-size: 3rem;
            color: red;
            border: 1px solid red;
            padding: 50px;
            border-radius: 50px;
            margin-bottom: 100px;
          }
          .section_2{
            text-align: center;
            height: 200px;
          }

        </style>
    </head>
    <body>
      <!-- costruisco un semplice header con navbar, un main e un footer -->
      <header>
        <nav>
          @foreach ($icon as $key)
            <a href="home">{{$key}}</a>
          @endforeach
        </nav>
        <hr>
      </header>
